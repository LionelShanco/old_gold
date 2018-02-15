<?php
namespace OldGold\OldGold\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Chetan 
 */
class AdPostControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \OldGold\OldGold\Controller\AdPostController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\OldGold\OldGold\Controller\AdPostController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenAdPostToAdPostRepository()
    {
        $adPost = new \OldGold\OldGold\Domain\Model\AdPost();

        $adPostRepository = $this->getMockBuilder(\OldGold\OldGold\Domain\Repository\AdPostRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $adPostRepository->expects(self::once())->method('add')->with($adPost);
        $this->inject($this->subject, 'adPostRepository', $adPostRepository);

        $this->subject->createAction($adPost);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenAdPostToView()
    {
        $adPost = new \OldGold\OldGold\Domain\Model\AdPost();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('adPost', $adPost);

        $this->subject->editAction($adPost);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenAdPostInAdPostRepository()
    {
        $adPost = new \OldGold\OldGold\Domain\Model\AdPost();

        $adPostRepository = $this->getMockBuilder(\OldGold\OldGold\Domain\Repository\AdPostRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $adPostRepository->expects(self::once())->method('update')->with($adPost);
        $this->inject($this->subject, 'adPostRepository', $adPostRepository);

        $this->subject->updateAction($adPost);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenAdPostFromAdPostRepository()
    {
        $adPost = new \OldGold\OldGold\Domain\Model\AdPost();

        $adPostRepository = $this->getMockBuilder(\OldGold\OldGold\Domain\Repository\AdPostRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $adPostRepository->expects(self::once())->method('remove')->with($adPost);
        $this->inject($this->subject, 'adPostRepository', $adPostRepository);

        $this->subject->deleteAction($adPost);
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenAdPostToView()
    {
        $adPost = new \OldGold\OldGold\Domain\Model\AdPost();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('adPost', $adPost);

        $this->subject->showAction($adPost);
    }
}
