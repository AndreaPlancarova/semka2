<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Instructor extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'photo',
        'age',
        'description'
    ];

//    /**
//     * Zamestnanec constructor.
//     * @param $name ;
//     * @param $description
//     * @param $age
//     * @param $photo
//     */
//    public function __construct($name = "", $description = "", $age = "", $photo = "")
//    {
//        $this->name = $name;
//        $this->description = $description;
//        $this->age = $age;
//        $this->photo = $photo;
//    }
//
//    /**
//     * @return mixed
//     */
//
//
//    static public function setDbColumns()
//    {
//        return ['id_instructor', 'name', 'photo' , 'description', 'age'];
//    }
//
//    static public function setTableName()
//    {
//        return "instructors";
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getIdInstuctor()
//    {
//        return $this->id_instuctor;
//    }
//
//    /**
//     * @param mixed $id_instuctor
//     */
//    public function setIdInstuctor($id_instuctor): void
//    {
//        $this->id_instuctor = $id_instuctor;
//    }
//
//    /**
//     * @return mixed|string
//     */
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    /**
//     * @param mixed|string $name
//     */
//    public function setName($name): void
//    {
//        $this->name = $name;
//    }
//
//    /**
//     * @return mixed|string
//     */
//    public function getDescription()
//    {
//        return $this->description;
//    }
//
//    /**
//     * @param mixed|string $description
//     */
//    public function setDescription($description): void
//    {
//        $this->description = $description;
//    }
//
//    /**
//     * @return mixed|string
//     */
//    public function getAge()
//    {
//        return $this->age;
//    }
//
//    /**
//     * @param mixed|string $age
//     */
//    public function setAge($age): void
//    {
//        $this->age = $age;
//    }
//
//    /**
//     * @return mixed|string
//     */
//    public function getPhoto()
//    {
//        return $this->photo;
//    }
//
//    /**
//     * @param mixed|string $photo
//     */
//    public function setPhoto($photo): void
//    {
//        $this->photo = $photo;
//    }

}
