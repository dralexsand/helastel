<?php

class HelastelProcess{

    private $form_id;
    private $data_process;
    private $data_form;

    public function __construct($form_id)
    {
        $this->form_id = $form_id;
        require_once HELASTEL_DIR.'includes/class-helastel_employees-data.php';
        $this->data_process = new Helastel_employees_Data();
        require_once HELASTEL_DIR.'includes/helastel_form.php';
        $this->data_form = new HSForm();
    }

    public function process(){

        switch ($this->form_id){
            case 1:
                $form = $this->getForm1();
                break;

            case 2:
                $form = $this->getForm2();
                break;

            case 3:
                $form = $this->getForm3();
                break;

            case 4:
                $form = $this->getForm4();
                break;

            case 5:
                $form = $this->getForm5();
                break;
        }

        return $form;
    }

    private function getForm1(){
        $data = $this->data_process->getTest_1_Data();
        return $this->data_form->getForm($data);
    }

    private function getForm2(){
        $data = $this->data_process->getTest_2_Data();
        return $this->data_form->getForm($data);
    }

    private function getForm3(){
        $data = $this->data_process->getTest_3_Data();
        return $this->data_form->getForm($data);
    }

    private function getForm4(){
        $data = $this->data_process->getTest_4_Data();
        return $this->data_form->getForm($data);
    }

    private function getForm5(){
        $data = $this->data_process->getTest_5_Data();
        return $this->data_form->getForm($data);
    }



}
