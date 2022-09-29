<?php
    namespace Drupal\resume\Controller;
    use Drupal\Core\Controller\ControllerBase;
    use Drupal\node\Entity\Node;

    class ResumeController extends ControllerBase{

        public function createResume($nid){
            $transNode = Node::load($nid);



            $resume_form = array(
              '#theme' => 'resumearray',
              '#res'=> $transNode,
            );
            return $resume_form;
        }
    }