<?php
class UsersController extends  AppController{
        var $uses=array('User');

    public function index(){

        }


        public function add(){
            echo "Hello";

            if($this->request->is('post')){
                $this->User->create();
                if($this->User->save($this->request->data)){
                    $this->Session->setFlash('Registration Successful','flash_success');

                }else{
                    $this->Session->setFlash(_('Registration could not be successful please try again'));
                }
            }


        }



        public function login(){

            if($this->request->is('post')){
                if($this->Auth->login($this->request->data))
                {
                    print "heello";
                    $this->redirect(array('controller' => 'users', 'action' => 'index'));
                }else
                    $this->Session->setFlash(_('Sorry Usernaem and Password Does not match'));
            }
            else{
                 if($this->Auth->login($this->request->data))
                 {
                     $this->redirect(array('controller' => 'users', 'action' => 'index'));
                 }

            }

        }

       public function logout(){
           $this->redirect($this->Auth->logout($this->request->data));

       }

}