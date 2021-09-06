<?php

declare(strict_types=1);

/*
 * This file is part of the "gotobackend" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\GoToBackend\AdminPanel;

use Brotkrueml\GoToBackend\Extension;
use TYPO3\CMS\Adminpanel\ModuleApi\AbstractModule;
use TYPO3\CMS\Adminpanel\ModuleApi\PageSettingsProviderInterface;
use TYPO3\CMS\Backend\Routing\UriBuilder;
use TYPO3\CMS\Core\Type\Bitmask\Permission;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\View\StandaloneView;
use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;

final class EditModule extends AbstractModule implements PageSettingsProviderInterface
{
    /** @var UriBuilder */
    protected $uriBuilder;

    public function __construct(UriBuilder $uriBuilder = null)
    {
        parent::__construct();
        $this->uriBuilder = $uriBuilder;
    }

    public function getIdentifier(): string
    {
        return Extension::ADMINPANEL_MODULE_IDENTIFIER;
    }

    public function getLabel(): string
    {
        return \htmlspecialchars(
            $this->getLanguageService()->sL(Extension::LANGUAGE_PATH . ':edit')
        );
    }

    public function getIconIdentifier(): string
    {
        return 'actions-open';
    }

    public function getPageSettings(): string
    {
        $tsfe = $this->getTypoScriptFrontendController();
        $permissions = $this->getBackendUser()->calcPerms($tsfe->page);
        if ($permissions & Permission::PAGE_EDIT) {
            $view = GeneralUtility::makeInstance(StandaloneView::class);
            $templateNameAndPath = \sprintf('EXT:%s/Resources/Private/Templates/AdminPanel/Edit.html', Extension::KEY);
            $view->setTemplatePathAndFilename(GeneralUtility::getFileAbsFileName($templateNameAndPath));

            $link = $this->uriBuilder->buildUriFromRoute(
                'web_layout',
                [
                    'id' => (int)$tsfe->page['uid'],
                ]
            );

            $view->assign('link', $link);

            return $view->render();
        }

        return '';
    }

    private function getTypoScriptFrontendController(): TypoScriptFrontendController
    {
        return $GLOBALS['TSFE'];
    }
}
