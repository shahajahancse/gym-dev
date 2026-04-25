<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class LockerAssignment
 * @package App\Models
 * @version January 9, 2025, 5:20 am UTC
 *
 * @property integer $locker_id
 * @property integer $member_id
 * @property string $start_date
 * @property string $end_date
 * @property string $status
 */
class LockerAssignment extends Model
{

    public $table = 'lockerassignments';



    protected $guarded = ['id'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'id' => 'integer',
    //     'locker_id' => 'integer',
    //     'member_id' => 'integer',
    //     'start_date' => 'date',
    //     'end_date' => 'date',
    //     'status' => 'string'
    // ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'member_id'      => 'required|integer|exists:members,id',
        'locker_id'      => 'required|integer|exists:lockers,id',
        'amount'         => 'nullable|numeric|min:0',
        'tax'            => 'nullable|numeric|min:0',
        'admission_fee'  => 'nullable|numeric|min:0',
        'gross_amount'   => 'nullable|numeric|min:0',
        'coupons_id'     => 'nullable|integer|exists:coupons,id',
        'coupon_amount'  => 'nullable|numeric|min:0',
        'pay_amount'     => 'nullable|numeric|min:0',
        'due_amount'     => 'nullable|numeric|min:0',
        'pay_status'     => 'nullable|string|max:255',
        'start_date'     => 'required|date',
        'end_date'       => 'required|date|after:start_date',
        'locker_status'  => 'required|string|max:255',
        'payment_mode'   => 'nullable|string|max:255',
        'payment_date'   => 'nullable|date',
        'payment_amount' => 'nullable|numeric|min:0',
        'payment_note'   => 'nullable|string',
        'payment_doc'    => 'nullable|string|max:255',
        'payment_number' => 'nullable|string|max:255',
        'payment_status' => 'nullable|string|max:255',
    ];


}
