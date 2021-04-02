<?php
namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\User;
use Hash;
class Users extends Component
{
	public $users, $name, $username, $email, $user_id;
	public $updateMode = false;
    public function render()
    {
    	$this->users = User::all();
        return view('livewire.users');
    }

    public function resetInputFields(){
    	$this->name='';
    	$this->username='';
    	$this->email='';
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
        ]);
       
        $validatedData['password']= Hash::make($this->username);
        
        User::create($validatedData);
        session()->flash('message', 'Users Created Successfully.');
        $this->resetInputFields();
        $this->emit('userStore');
    }


    public function edit($id)
    {
        $this->updateMode = true;
        $user = User::where('id',$id)->first();
        $this->user_id = $id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->username = $user->username;
    }
    
    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
        ]);
    
        if ($this->user_id) {
            $user = User::find($this->user_id);
            $user->update([
                'name' => $this->name,
                'username'=> $this->username,
                'email' => $this->email,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();
        }
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function delete($id)
    {
        if($id){
            User::where('id',$id)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
        }
    }


}
