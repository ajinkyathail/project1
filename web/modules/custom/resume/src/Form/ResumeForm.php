<?php

namespace Drupal\resume\Form;


use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;
use Drupal\Core\Url;
use Drupal\Core\Routing;
use Drupal\Core\Database\Database;

class ResumeForm extends FormBase

{


    /**
     * {@inheritdoc}
     */
    public function getFormId()
    {
        return 'resume_form';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state,)
    {  {


      $form['fname'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Name'),
        '#required' => TRUE,
        '#maxlength' => 20,
        '#default_value' =>  '',
    ];
    // $form['bdate'] = [
    //     '#type' => 'date',
    //     '#title' => $this->t('Birthdate'),
    //     '#required' => TRUE,
    //     '#default_value' =>  '',
    // ];
    $form['email'] = [
        '#type' => 'email',
        '#title' => $this->t('Email'),
        '#required' => TRUE,
        '#maxlength' => 20,
        '#default_value' => '',
    ];
    $form['saccount'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Social Accounts'),
        '#required' => TRUE,
        '#maxlength' => 20,
        '#default_value' => '',
    ];
    $form['ssc'] = [
        '#type' => 'textfield',
        '#title' => $this->t('SSC'),
        '#required' => TRUE,
        '#maxlength' => 20,
        '#default_value' => '',
    ];
    $form['hsc'] = [
        '#type' => 'textfield',
        '#title' => $this->t('HSC'),
        '#required' => TRUE,
        '#maxlength' => 20,
        '#default_value' => '',
    ];
    $form['ugper'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Under Graduation'),
        '#required' => TRUE,
        '#maxlength' => 20,
        '#default_value' => '',
    ];
    $form['pgper'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Post Graduation'),
        '#required' => TRUE,
        '#maxlength' => 20,
        '#default_value' => '',
    ];
    $form['projects'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Projects'),
        '#required' => TRUE,
        '#maxlength' => 255,
        '#default_value' => '',
    ];
    $form['skills'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Skills'),
        '#required' => TRUE,
        '#maxlength' => 255,
        '#default_value' => '',
    ];
    $form['achievements'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Achievements'),
        '#required' => TRUE,
        '#maxlength' => 255,
        '#default_value' => '',
    ];
    $form['experience'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Experience'),
        '#required' => TRUE,
        '#maxlength' => 255,
        '#default_value' => '',
    ];
    $form['languages'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Languages Known'),
        // '#required' => TRUE,
        '#maxlength' => 255,
        '#default_value' => '',
    ];

    $form['country'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Country'),
        '#required' => TRUE,
        '#maxlength' => 100,
        '#default_value' => '',
    ];
    $form['city'] = [
        '#type' => 'textfield',
        '#title' => $this->t('City'),
        '#required' => TRUE,
        '#maxlength' => 100,
        '#default_value' => '',
    ];
    $form['pincode'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Pincode'),
        '#required' => TRUE,
        '#maxlength' => 6,
        '#default_value' => '',
    ];
    $form['mobileno'] = [
        '#type' => 'tel',
        '#title' => $this->t('Mobile No'),
        '#required' => TRUE,
        '#maxlength' => 20,
        '#default_value' => '',
    ];

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = [
        '#type' => 'submit',
        '#button_type' => 'primary',
        '#default_value' => $this->t('Save'),
    ];

	//$form['#validate'][] = 'studentFormValidate';
        return $form;
    }
}

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state)
    {
      $field = $form_state->getValues();

      $fields["fname"] = $field['fname'];
      if (!$form_state->getValue('fname') || empty($form_state->getValue('fname'))) {
              $form_state->setErrorByName('fname', $this->t('Provide First Name'));}
        // $field = $form_state->getValues();

        // $fields["fname"] = $field['fname'];
        // if (!$form_state->getValue('fname') || empty($form_state->getValue('fname'))) {
        //     $form_state->setErrorByName('fname', $this->t('Fill your Name'));
        // }

        // if (!is_numeric($form_state->getValue('year'))) {
        //     $form_state->setErrorByName('year', $this->t('Year must be numberic.'));
        // }

        // if (!is_numeric($form_state->getValue('price'))) {
        //     $form_state->setErrorByName('price', $this->t('price must be numberic.'));
        // }
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {

      $field = $form_state->getValues();
      $node = Node::create(['type' => 'resume_form']);

      $node-> title = $field['fname'];
      // $node-> field_firstn = $field['bdate'];
      $node-> field_email = $field['email'];
      $node-> field_social_accounts = $field['saccount'];
      $node-> field_ssc = $field['ssc'];
      $node-> field_hsc = $field['hsc'];
      $node-> field_under_graduation_cgpa = $field['ugper'];
      $node-> field_post_gra = $field['pgper'];
      $node-> field_projects = $field['projects'];
      $node-> field_skills = $field['skills'];
      $node-> field_achievements = $field['achievements'];
      $node-> field_experience = $field['experience'];
      $node-> field_languages_known = $field['languages'];
      $node-> field_country = $field['country'];
      $node-> field_city = $field['city'];
      $node-> field_pincode = $field['pincode'];
      $node-> field_mo = $field['mobileno'];

      $node->uid = \Drupal::currentUser()->id();

      $node->save();
      $nid = $node->id();


      \Drupal::messenger()->addMessage($this->t('Resume successfully Created'));
      $url = \Drupal\Core\Url::fromRoute('resume.resumecreate', ['nid' => $node->id()]);
    //   $url = \Drupal\Core\Url::fromRoute('entity.node.canonical', ['node' => $node->id()]);
      return $form_state->setRedirectUrl($url);



  }


}
