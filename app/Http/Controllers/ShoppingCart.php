<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App;
use Session;

class ShoppingCart extends Controller
{
	public function getItems(){
		return Session::get('cart');
	}

	public function addtoCart($item){
		$id = $item['id'];

		$specific = $this->getSpecific($id);

		if(!$specific) {
			Session::push('cart', $item);
			return true;
		}
		else {
			return false;
		}
	}

	public function clearCart(){
		Session::forget('cart');
	}

	public function updateItem($data, $id){

		$specific = $this->getSpecific($id);

		$old = Session::get('cart.' . key($specific));

		Session::forget('cart.' . key($specific));

		$item = [
            'id' => $id,
            'title' => $old['title'],
            'quantity' => $data['quantity'],
			'price' => $old['price'],
        ];
		Session::push('cart', $item);

	}

	public function deleteItem($id){
		$specific = $this->getSpecific($id);
		Session::forget('cart.' . key($specific));
	}

	public function getSpecific($id){
		$items = $this->getItems();
		if($items === null){
			return false;
		} else{
			$specific = Arr::where($items, function ($value, $key) use ($id) {
				return $value['id'] == $id;
			});
			return $specific;
		}
	}
}
?>