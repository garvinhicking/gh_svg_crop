<?php
namespace GarvinHicking\SvgCrop\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\EventDispatcher\EventDispatcher;
use TYPO3\CMS\Core\Resource\FileRepository;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

class DummyController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    public function listAction(): ResponseInterface
    {
        /** @var ContentObjectRenderer $content */
        $content = $this->request->getAttribute('currentContentObject');
        $uid = $content->data['uid'];

        $fileRepository = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(FileRepository::class);
        $fileObjects = $fileRepository->findByRelation(
            'tt_content',
            'settings.cropImage',
            $uid);
        $this->view->assign('images', $fileObjects);

        return $this->htmlResponse();
    }
}
