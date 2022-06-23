<?php

namespace SilverStripe\Lessons;

use PageController;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\RequiredFields;

class ArticlePageController extends PageController
{
    public function CommentForm()
    {
        $form = Form::create(
            $this,
            __FUNCTION__,
            FieldList::create(
                TextField::create('Name', ''),
                EmailField::create('Email', ''),
                TextareaField::create('Comment', '')
            ),
            FieldList::create(
                FormAction::create('handleComment', 'Post Comment')
            ),
            RequiredFields::create('Name', 'Email', 'Comment')
        );

        return $form;
    }

    public function handleComment($data, $form)
    {
        $session = $this->getRequest()->getSession();
        $session->set("FormData.{$form->getName()}.data", $data);

        $existing = $this->Comments()->filter([
            'Comment' => $data['Comment']
        ]);

        if($existing->exists() && strlen($data['Comment']) > 20) {
            $form->sessionMessage('That comment already exists! Spammer!','bad');

            return $this->redirectBack();
        }

        $comment = ArticleComment::create();
        $comment->ArticlePageID = $this->ID;
        $form->saveInto($comment);
        $comment->write();

        $session->clear("FormData.{$form->getName()}.data");
        $form->sessionMessage('Thanks for your comment!','good');

        return $this->redirectBack();
    }

    private static $allowed_actions = [
        'CommentForm',
      ];
    
}
