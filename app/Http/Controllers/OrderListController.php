<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use \Config;

class OrderListController extends Controller
{

  public function ordersSort ($arr) {
    if (!isset($arr['order']) or !isset($arr['sort'])) {
      return [
        'order' => 'id',
        'sort' => 'desc',
      ];
    }
    if ($arr['order'] and $arr['sort']) {
      return [
        'order' => $arr['order'],
        'sort' => $arr['sort'],
      ];
    } 
  }

  public function orderList (Request $request) {
    $orderBy = self::ordersSort($request->input());
    $order_statuses = \Config::get('constants.order_statuses');
    if (isset($request->input()['orderListSearch']) and $request->input()['orderListSearch']) {
      $search = $request->input()['orderListSearch'];
      $src = Order::orderBy($orderBy['order'], $orderBy['sort'])
      ->where('title', 'LIKE', '%'.$search.'%' )
      ->orwhere('content', 'LIKE', '%'.$search.'%' )
      ->get();
    } else {
      $search = '';
      $src = Order::orderBy($orderBy['order'], $orderBy['sort'])->get();
    }
    
    foreach ($src as $key => $value) {
      if ($value->status == 'open') {
        $status_color = 'info';
      }
      if ($value->status == 'booked') {
        $status_color = 'warning';
      }
      if ($value->status == 'in_work') {
        $status_color = 'primary';
      }
      if ($value->status == 'completed') {
        $status_color = 'success';
      }
      $arr[] = [
        'id' => $value->id,
        'created_at' => $value->created_at->toDateString(),
        'title' => $value->title,
        'content' => $value->content,
        'customer' => $value->customer,
        'customer_email' => $value->customer_email,
        'customer_phone' => $value->customer_phone,
        'customer_address' => $value->customer_address,
        'status' => $value->status,
        'status_name' => Config::get('constants.order_statuses')[$value->status]['title'],
        'status_color' => Config::get('constants.order_statuses')[$value->status]['color'],
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
    if (!isset($arr)) {
      $arr = [];
    }

    return view('order-list', [
      'arOrders' => $arr,
      'orderBy' => $orderBy,
      'search' => $search,
    ]);
  }
}
