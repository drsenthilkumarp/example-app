<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Academic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Academic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Academic query()
 * @method static \Illuminate\Database\Eloquent\Builder|Academic whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Academic whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Academic whereUpdatedAt($value)
 */
	class Academic extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Academics newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Academics newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Academics query()
 * @method static \Illuminate\Database\Eloquent\Builder|Academics whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Academics whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Academics whereUpdatedAt($value)
 */
	class Academics extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class City extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Country extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Department extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $address
 * @property string $zip_code
 * @property string $date_of_birth
 * @property string $date_hired
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereDateHired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereZipCode($value)
 * @mixin \Eloquent
 */
	class Employee extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $leave_type
 * @property string $purpose
 * @property string $from_date
 * @property string $to_date
 * @property string $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|Leave newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Leave newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Leave query()
 * @method static \Illuminate\Database\Eloquent\Builder|Leave whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Leave whereFromDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Leave whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Leave whereLeaveType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Leave wherePurpose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Leave whereToDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Leave whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Leave whereUserId($value)
 */
	class Leave extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $regnumber
 * @property string $name
 * @property string $year
 * @property string $department
 * @method static \Illuminate\Database\Eloquent\Builder|Piclab newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Piclab newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Piclab query()
 * @method static \Illuminate\Database\Eloquent\Builder|Piclab whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Piclab whereDepartment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Piclab whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Piclab whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Piclab whereRegnumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Piclab whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Piclab whereYear($value)
 * @mixin \Eloquent
 */
	class Piclab extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $regnumber
 * @property string $department
 * @property string $year
 * @property string|null $email_id
 * @property string|null $phone_number
 * @property string|null $father_name
 * @property string|null $father_phone_number
 * @property string|null $father_occupation
 * @property string|null $mother_name
 * @property string|null $mother_phone_number
 * @property string|null $mother_occupation
 * @property string|null $address
 * @property string|null $city
 * @property string|null $district
 * @property string|null $pincode
 * @property string|null $hostel_namee
 * @property string|null $hostel_room_number
 * @property string|null $warden_name
 * @property string|null $warden_phone_number
 * @property string|null $care_taker_name
 * @property string|null $care_taker_phone_number
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCareTakerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCareTakerPhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDepartment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereEmailId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereFatherName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereFatherOccupation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereFatherPhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereHostelNamee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereHostelRoomNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereMotherName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereMotherOccupation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereMotherPhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePincode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereRegnumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereWardenName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereWardenPhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereYear($value)
 * @mixin \Eloquent
 */
	class Profile extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $register_number
 * @property string|null $name
 * @method static \Illuminate\Database\Eloquent\Builder|Pskill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pskill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pskill query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pskill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pskill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pskill whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pskill whereRegisterNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pskill whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $student_name
 * @method static \Illuminate\Database\Eloquent\Builder|Pskill whereStudentName($value)
 */
	class Pskill extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State query()
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class State extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $pskill_name
 * @property string $level
 * @property string $date
 * @property string $status
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProfile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProfile whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProfile whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProfile wherePskillName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProfile whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProfile whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProfile whereUserId($value)
 */
	class StudentProfile extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutRole($roles, $guard = null)
 */
	class User extends \Eloquent {}
}

