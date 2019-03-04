<?php
class MyModComments extends Module
{
    public function __construct()
     {
         $this->name = 'mymodcomments';
         $this->tab = 'front_office_features';
         $this->version = '0.1.0';
         $this->author = 'Bren';

         $this->displayName = 'Mon module de commentaires produits';
         $this->description = 'Avec ce module, vos clients pourront noter et commenter vos produits !';

         $this->bootstrap = true;

         parent::__construct();
     }

     public function processConfiguration()
     {
        if (Tools::isSubmit('submit_mymodcomments_form'))
        {
            $enable_grades = Tools::getValue('enable_grades');
            $enable_comments = Tools::getValue('enable_comments');
            Configuration::updateValue('MYMOD_GRADES', $enable_grades);
            Configuration::updateValue('MYMOD_COMMENTS', $enable_comments);
            $this->context->smarty->assign('confirmation', 'ok');
        }
     }

     public function assignConfiguration()
     {
         $enable_grades = Configuration::get('MYMOD_GRADES');
         $enable_comments = Configuration::get('MYMOD_COMMENTS');
         $this->context->smarty->assign('enable_grades', $enable_grades);
         $this->context->smarty->assign('enable_comments', $enable_comments);
    }

     public function getContent()
     {
         $this->processConfiguration();
         $this->assignConfiguration();
         return $this->display(__FILE__, 'getContent.tpl');
     }

     public function install()
     {
         parent::install();
         $this->registerHook('displayProductTabContent');

         return true;
     }

     public function processProductTabContent()
     {
         if (Tools::isSubmit('mymod_pc_submit_comment'))
         {
            $id_product = Tools::getValue('id_product');
            $grade = Tools::getValue('grade');
            $comment = Tools::getValue('comment');
            $insert = array(
                'id_product' => (int)$id_product,
                'grade' => (int)$grade,
                'comment' => pSQL($comment),
                'date_add' => date('Y-m-d H:i:s'),
            );
            Db::getInstance()->insert('mymod_comment', $insert);
         }
     }

     public function hookDisplayProductTabContent($params)
     {
        $this->processProductTabContent();
        return $this->display(__FILE__, 'displayProductTabContent.tpl');
     }
}