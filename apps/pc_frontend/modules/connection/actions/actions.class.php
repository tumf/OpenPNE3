<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

/**
 * connection actions.
 *
 * @package    OpenPNE
 * @subpackage action
 * @author     Kousuke Ebihara <ebihara@tejimaya.com>
 */
class connectionActions extends opOAuthConsumerAction
{
  public function executeList(sfWebRequest $request)
  {
    $this->pager = Doctrine::getTable('OAuthConsumerInformation')
      ->getListPager($this->getUser()->getMemberId());
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->getForm()->getObject()->setMemberId($this->getUser()->getMemberId());

    parent::executeCreate(sfWebRequest $request);
  }
}
