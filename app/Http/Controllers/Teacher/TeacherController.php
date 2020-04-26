<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use App\Models\Teacher;
use App\Models\Person;
use App\Models\Field;

/**
 * 
 * @author Juan Soares
 */
class TeacherController extends Controller {
    
    /**
     * 
     * @var \App\Models\Teacher $teacher
     */
    private $teacher;
    
    /**
     * 
     * @var \App\Models\Person $person
     */
    private $person;

    /**
     * Create a new controller instance.
     *
     * @* @param Teacher $teacher
     * @* @param Person $person
     * 
     * @return void
     */
    public function __construct(Teacher $teacher, Person $person) {
        $this->teacher = $teacher;
        $this->person = $person;
    }

    /**
     * 
     */
    public function index() {
        $persons = $this->person->where('type', '=', 'T')->paginate(10);
        $fields = Field::all();

        return view('site.professor.professores', compact('persons', 'fields'));
    }

    /**
     * 
     */
    public function searchTeachers($q = '') {
        $persons = $this->person->where([
                        ['name', 'like', '%' . $q . '%'],
                        ['type', '=', 'T']
                    ])->paginate(10);
                    
        $fields = Field::all();
        return view('site.professor.professores', compact('persons', 'fields'));
    }

    /**
     * 
     * @* @param Request $request
     */
    public function filterTeachers(Request $request) {

        $direction = 'asc';
        $order = 'teachers.hour_of_class';
        if (isset($request->order) && !is_null($request->order)) {
            if ($request->order != 'rating') {
                $direction = (($request->order == 'menor') ? 'asc' : 'desc');
            } else {
                $order = 'avg';
                $direction = 'desc';
            }
        }

        $persons = Person::leftJoin('teachers', 'people.id', '=', 'teachers.person_id')
                            ->leftJoin('offered_classes', 'teachers.id', '=', 'offered_classes.teacher_id')
                            ->leftJoin('fields', 'fields.id', '=', 'offered_classes.field_id')
                            ->leftJoin('categories', 'fields.id', '=', 'categories.field_id')
                            ->leftJoin('ratings', 'teachers.id', '=', 'ratings.teacher_id')
                            ->where(function ($query) use (&$request) {
                                if (isset($request->name) && !is_null($request->name)) {
                                    $query->where('people.name', 'like', '%' . $request->name . '%');
                                }    

                                if (isset($request->field) && !is_null($request->field)) {
                                    $query->where('fields.slug', '=', $request->field);
                                }
                                
                                if (isset($request->category) && !is_null($request->category)) {
                                    $query->where('categories.slug', '=', $request->category);
                                }
                                
                                if (isset($request->kindOfClass) && !is_null($request->kindOfClass)) {
                                    $query->where('teachers.kind_of_class', '=', $request->kindOfClass);
                                }

                                if (isset($request->gender) && !is_null($request->gender)) {
                                    $query->where('people.gender', '=', $request->gender);
                                }

                                $query->where('people.type', '=', 'T');
                            })
                            ->orderBy($order, $direction)
                            ->select('people.id', 'people.address_id', 'people.name', DB::raw('AVG(ratings.didactic + ratings.sympathy + ratings.knowledge) AS avg'))
                            ->groupBy('people.id', 'people.address_id', 'people.name')
                            ->paginate(10);

        $fields = Field::all();

        $categories = null;
        if (isset($request->field) && !is_null($request->field)) {
            $categories = $this->getCategories($request->field);
        }

        $dataForm = (object) $request->except('_token');

        return view('site.professor.professores', compact('persons', 'fields', 'dataForm', 'categories'));

    }

    /**
     * 
     * 
     */
    public function getTeacher(Teacher $teacher) {
        return view('site.professor.professor', compact('teacher'));
    }

    /**
     * 
     */
    public function getCategories($field) {
        return Field::where('slug', '=', $field)->first()->categories;
    }

}
