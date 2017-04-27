<?php
namespace Typoblok\Typoblok\Controller;

/***
 *
 * This file is part of the "Typoblok" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Alexander Feiglstorfer <af@storyblok.com>, Storyblok
 *
 ***/

/**
 * StoryController
 */
class StoryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $client = new \Storyblok\Client('jke7h5iQF0QUyUbOreQ0cQtt');
        $client->getStoryBySlug('home');
        $data = $client->getBody();

        $stories = [];
        $this->view->assign('story', $data['story']);
    }
}
