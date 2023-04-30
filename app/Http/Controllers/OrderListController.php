<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderListController extends Controller
{
  public function orderList () {
    $order_statuses = \Config::get('constants.order_statuses');
    $src = Order::get();
    foreach ($src as $key => $value) {
      if ($value->status == 'open') {
        $status_color = 'secondary';
      }
      if ($value->status == 'booked') {
        $status_color = 'info';
      }
      if ($value->status == 'in_work') {
        $status_color = 'primary';
      }
      if ($value->status == 'completed') {
        $status_color = 'success';
      }
      $arr[] = [
        'id' => $value->id,
        'title' => $value->title,
        'content' => $value->content,
        'customer' => $value->customer,
        'customer_email' => $value->customer_email,
        'customer_phone' => $value->customer_phone,
        'customer_address' => $value->customer_address,
        'status' => $value->status,
        'status_name' => $order_statuses[$value->status],
        'status_color' => $status_color,
        'contractor' => [
          'id' => $value->contractor_data->id,
          'name' => $value->contractor_data->name,
          'email' => $value->contractor_data->email,
          'role' => $value->contractor_data->role,
        ],
        'manager' => [
          'id' => $value->manager_data->id,
          'name' => $value->manager_data->name,
          'email' => $value->manager_data->email,
          'role' => $value->manager_data->role,
        ],

      ];
    }
    return view('order-list', [
      'arOrders' => $arr,
    ]);
  }
}
