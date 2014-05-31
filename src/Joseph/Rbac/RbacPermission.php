<?php
namespace Joseph\Rbac;

use LaravelBook\Ardent\Ardent;
use Config;

class RbacPermission extends Ardent
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * Ardent validation rules
     *
     * @var array
     */
    public static $rules = array(
        'name' => 'required|between:4,128',
        'display_name' => 'required|between:4,128'
    );

    /**
     * Creates a new instance of the model
     */
    public function __construct(array $attributes = array()) {

        parent::__construct($attributes);
        $this->table = Config::get('rbac::permissions_table');
    }

    /**
     * Many-to-Many relations with Roles
     */
    public function roles()
    {
        return $this->belongsToMany(Config::get('rbac::role'), Config::get('rbac::permission_role_table'));
    }

    /**
     * Before delete all constrained foreign relations
     *
     * @param bool $forced
     * @return bool
     */
    public function beforeDelete( $forced = false )
    {
        try {
            \DB::table(Config::get('rbac::permission_role_table'))->where('permission_id', $this->id)->delete();
        } catch(Execption $e) {}

        return true;
    }

}
