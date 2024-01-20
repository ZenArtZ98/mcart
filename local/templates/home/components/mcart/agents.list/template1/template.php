<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

//echo '<pre>';
//print_r($arResult); // для разработки в конечном коде убрать
//echo '</pre>';

use Bitrix\Main\Page\Asset;

Asset::getInstance()->addJs('/local/components/mcart/agents.list/templates/.default/script.js');

/*
 * Для постраничной навигации использовать компонент bitrix:main.pagenavigation
 */
?>

<div class="site-section site-section-sm bg-light">
    <div class="container agents-list">
        <div class="row mb-5">
            <div class="col-12">
                <div class="site-section-title">
                    <h2>Агенты по Недвижимости</h2>
                </div>
            </div>
        </div>

        <?php foreach ($arResult['AGENTS']['ITEMS'] as $agent): ?>
            <div class="mb-5">
                <div class="agent__card">
                    <div class="small-info">
                        <div class="avatar" style="background-image: url(<?= (!empty($agent['UF_PHOTO_SRC']) ? $agent['UF_PHOTO_SRC'] : 'local/templates/home/components/mcart/agents.list/template1/images/no-avatar.png') ?>);"></div>
                        <div class="info">
                            <div class="name"><?= htmlspecialcharsbx($agent['UF_FULL_NAME']) ?></div>
                        </div>
                    </div>
                    <div class="agent__card_item">
                        <div class="agent__card_info">
                            <div class="card__info_item">
                                <div class="position">Электронная почта: </div>
                                <div class="name"><?= htmlspecialcharsbx($agent['UF_EMAIL']) ?></div>
                            </div>
                            <div class="card__info_item">
                                <div class="position">Телефон: </div>
                                <div class="name"><?= htmlspecialcharsbx($agent['UF_PHONE']) ?></div>
                            </div>
                            <div class="card__info_item">
                                <div class="position">Вид деятельности:</div>
                                <div class="name"><?= htmlspecialcharsbx($agent['UF_KIND_OF_ACTIVITY_VALUE'] ?? 'Не указано') ?></div>
                            </div>
                        </div>
                    </div>
                    <a class="star <?= in_array($agent['ID'], $arResult['STAR_AGENTS']) ? 'active' : '' ?>" data-agent-id="<?= $agent['ID'] ?>">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 4L14.472 9.26604L20 10.1157L16 14.2124L16.944 20L12 17.266L7.056 20L8 14.2124L4 10.1157L9.528 9.26604L12 4Z" stroke="#95929A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="row">
            <div class="col-md-12 text-center">
                <div class="site-pagination">
                    <?php if ($arResult['AGENTS']['NAV_OBJECT']->getPageCount() > 1): ?>
                        <?php for ($page = 1; $page <= $arResult['AGENTS']['NAV_OBJECT']->getPageCount(); $page++): ?>
                            <a href="<?= $APPLICATION->GetCurPageParam('PAGEN_'.$arResult['AGENTS']['NAV_OBJECT']->getId().'='.$page, ['PAGEN_'.$arResult['AGENTS']['NAV_OBJECT']->getId()]) ?>" class="<?= ($page == $arResult['AGENTS']['NAV_OBJECT']->getCurrentPage() ? 'active' : '') ?>">
                                <?= $page ?>
                            </a>
                        <?php endfor; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>
</div>


