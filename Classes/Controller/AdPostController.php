<?php
namespace OldGold\OldGold\Controller;

/***
 *
 * This file is part of the "OldGoldApplication" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Chetan
 *
 ***/

/**
 * AdPostController
 */
use OldGold\OldGold\Property\TypeConverter\UploadedFileReferenceConverter;
use TYPO3\CMS\Extbase\Property\PropertyMappingConfiguration;




class AdPostController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * adPostRepository
     *
     * @var \OldGold\OldGold\Domain\Repository\AdPostRepository
     * @inject
     */
    protected $adPostRepository = null;
    /**
     * CountriesViewHelper
     *
     * @var \OldGold\OldGold\ViewHelpers\Form\GetCountriesViewHelper
     * @inject
     */
    protected $CategoriesView = null;
    /**
     * CategoriesViewHelper
     *
     * @var \OldGold\OldGold\ViewHelpers\Form\GetCategoriesViewHelper
     * @inject
     */
    protected $countriesView = null;

    /**
     * action new
     *
     * @return void
     */


    public function newAction()
    {

    }
    /**
     * Set TypeConverter option for image upload
     */
    public function initializeCreateAction()
    {
        $this->setTypeConverterConfigurationForImageUpload('newAdPost');
    }

    /**
     * action create
     *
     * @param \OldGold\OldGold\Domain\Model\AdPost $newAdPost
     * @return void
     */
    public function createAction(\OldGold\OldGold\Domain\Model\AdPost $newAdPost)
    {
        $this->adPostRepository->add($newAdPost);
        $this->addFlashMessage('the post ' . ' ' . $newAdPost->getTitle() . '' . '');
        $this->redirect('adShow');
    }

    /**
     * action edit
     *
     * @param \OldGold\OldGold\Domain\Model\AdPost $adPost
     * @ignorevalidation $adPost
     * @return void
     */
    public function editAction(\OldGold\OldGold\Domain\Model\AdPost $adPost)
    {
        $this->view->assign('adPost', $adPost);
    }
    /**
     * Set TypeConverter option for image upload
     */
    public function initializeUpdateAction()
    {
        $this->setTypeConverterConfigurationForImageUpload('adPost');
    }
    /**
     * action update
     *
     * @param \OldGold\OldGold\Domain\Model\AdPost $adPost
     * @return void
     */
    public function updateAction(\OldGold\OldGold\Domain\Model\AdPost $adPost)
    {
        $this->addFlashMessage('The object was updated.', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->adPostRepository->update($adPost);
        $this->redirect('adShow');
    }

    /**
     * action delete
     *
     * @param \OldGold\OldGold\Domain\Model\AdPost $adPost
     * @return void
     */
    public function deleteAction(\OldGold\OldGold\Domain\Model\AdPost $adPost)
    {
        $this->addFlashMessage('The object was deleted.', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        //$this-> flashMessageContainer -> add('The Post as been deleted');
        $this->adPostRepository->remove($adPost);
        $this->redirect('adShow');
    }

    /**
     * action adShow
     *
     * @return void
     */
    public function adShowAction()
    {
        $adPost = $this->adPostRepository->findAll();
        $this->view->assign('adPosts', $adPost);
    }



    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $adPosts = $this->adPostRepository->findAll();
        $this->view->assign('adPosts', $adPosts);
    }


    /**
     * action getArrayValues
     *
     * @param \OldGold\OldGold\Domain\Model\AdPost $AdPost
     * @return \OldGold\OldGold\Domain\Model\AdPost $AdPost
     */
    private function getArrayValues(\OldGold\OldGold\Domain\Model\AdPost $AdPost)
    {
        if (!is_null($AdPost->getDestination())) {
            $destinationValue = $this->countriesView->getValuesFromKey(explode(',', $AdPost->getDestination()));
            $AdPost->setDestination(implode(',', $destinationValue));
        }
        if (!is_null($AdPost->getDestination())) {
            $categoryValue = $this->CategoriesView->getValuesFromKey(explode(',', $AdPost->getDestination()));
            $AdPost->setCategories(implode(',', $categoryValue));
        }
        return $AdPost;

    }


    /**
     * action show
     *
     * @param \OldGold\OldGold\Domain\Model\AdPost $adPost
     * @return void
     */
    public function showAction(\OldGold\OldGold\Domain\Model\AdPost $adPost)
    {
        $this->view->assign('adPosts', $adPost);
    }

    protected function setTypeConverterConfigurationForImageUpload($argumentName)
    {
        $uploadConfiguration = [
            UploadedFileReferenceConverter::CONFIGURATION_ALLOWED_FILE_EXTENSIONS => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
            UploadedFileReferenceConverter::CONFIGURATION_UPLOAD_FOLDER => '1:/user_upload/',
        ];
        /** @var PropertyMappingConfiguration $newExampleConfiguration */
        $newExampleConfiguration = $this->arguments[$argumentName]->getPropertyMappingConfiguration();
        $newExampleConfiguration->forProperty('image')
            ->setTypeConverterOptions(
                'OldGold\\OldGold\\Property\\TypeConverter\\UploadedFileReferenceConverter',
                $uploadConfiguration
            );

    }

}
