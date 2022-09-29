<?php
    namespace Drupal\resume\Controller;
    use Drupal\Core\Controller\ControllerBase;
    use Drupal\node\Entity\Node;

    class ResumeController extends ControllerBase{

        public function createResume($nid){
            $transNode = Node::load($nid);
            $output = '<div class = "seller-details"><h6></h6>';
            $output.= '<p><b>Name : </b><span>' .$transNode->get('title')->value. '</span></p>';
            $output.= '<p><b>Email : </b><span>' .$transNode->get('field_email')->value. '</span></p>';
            // $output.= '<p><b>DOB : </b><span>' .$transNode->get('field_dob')->value. '</span></p>';
            $output.= '<p><b>Social Accounts: </b><span>' .$transNode->get('field_social_accounts')->value. '</span></p>';
            $output.= '<p><b>SSC : </b><span>' .$transNode->get('field_ssc')->value. '</span></p>';
            $output.= '<p><b>HSC : </b><span>'.$transNode->get('field_hsc')->value. '</span></p>';
            $output.= '<p><b>UG CGPA : </b><span>'.$transNode->get('field_under_graduation_cgpa')->value. '</span></p>';
            $output.= '<p><b>PG : </b><span>'.$transNode->get('field_post_gra')->value. '</span></p>';
            $output.= '<p><b>Project : </b><span>'.$transNode->get('field_projects')->value. '</span></p>';
            $output.= '<p><b>Skills : </b><span>' .$transNode->get('field_skills')->value. '</span></p>';
            $output.= '<p><b>Achievements : </b><span>' .$transNode->get('field_achievements')->value. '</span></p>';
            $output.= '<p><b>Experience : </b><span>' .$transNode->get('field_experience')->value. '</span></p>';
            $output.= '<p><b>Languages : </b><span>' .$transNode->get('field_languages_known')->value. '</span></p>';
            $output.= '<p><b>Country : </b><span>' .$transNode->get('field_country')->value. '</span></p>';
            $output.= '<p><b>City : </b><span>' .$transNode->get('field_city')->value. '</span></p>';
            $output.= '<p><b>Pincode : </b><span>' .$transNode->get('field_pincode')->value. '</span></p>';
            $output.= '<p><b>Phone No : </b><span>'.$transNode->get('field_mo')->value. '</span></p>';

            //  $output.= '<p><b>Account Manager Name : </b><span>' . $acc_manager_name . '</span></p>';
            //  $output.= '<p><b>Account Manager Email : </b><span>' . $acc_manager_email . '</span></p>';
            $output.= '</div>';

              return [
                '#type' => 'markup',
                '#markup' => $output,
              ];
        }
    }