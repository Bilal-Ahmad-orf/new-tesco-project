<?php

namespace App\Livewire\Shop;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $email;
    public $password;
    public $rpt_password;
    public $shop_name;
    public $emergency_contact;
    public $emergency_cmail;
    public $address;
    public $invite_code;
    public $message = null;

    public function submit()
    {
        $this->dispatch('message', [
            'text' => 'Please Login To Continue',
            'type' => 'danger',
            'status' => 401
        ]);
        // try {
        //     $user = User::create([
        //         'name' => $this->name,
        //         'email' => $this->email,
        //         'password' => Hash::make($this->password)
        //     ]);

        //     $shop = Shop::create([
        //         'shop_name' => $this->shop_name,
        //         'cnic_image' => "imge",
        //         'emg_contact' => $this->emergency_contact,
        //         'emg_email' => $this->emergency_cmail,
        //         'address' => $this->address,
        //         'user_id' => $user->id,
        //     ]);

        //     $this->message = "Shop has been successfully created";
        // } catch (\Exception $e) {
        //     DB::rollBack();
        //     throw $e;
        // }
    }
    public function render()
    {
        return view('livewire.shop.create');
    }
}
