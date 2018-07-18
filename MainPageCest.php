<?php

class MainPageCest
{
    public function SeeResponseOk(AcceptanceTester $I)
    {
        $I->sendGET('/');
        $I->seeResponseCodeIs(200);
    }
   public function SeeHeader(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->seeElement('.page-header__logo'); // #1 - logo
        $I->seeElement('.page-header__linksbar'); // #2 - header panel
        $I->see('О компании','a.linksbar__link.link');
        $I->seeLink('О компании','/about');
        $I->see('Контакты','a.linksbar__link.link');
        $I->seeLink('Контакты','/contacts');
        $I->see('Документы','a.linksbar__link.link');
        $I->seeLink('Документы','/documents/');
        $I->see('Реквизиты','a.linksbar__link.link');
        $I->seeLink('Реквизиты','/requisites/');
        $I->see('Раскрытие информации','a.linksbar__link.link');
        $I->seeLink('Раскрытие информации','/disclosure/');
        $I->see('Соответствие требованиям','a.linksbar__link.link');
        $I->seeLink('Соответствие требованиям','/compliance/');
        $I->seeElement('.page-header__controls'); // #3 - controls
        $I->see('8 800 800 900','.header-content__text');
        $I->seeElement('.page-header__content');
        $I->see('с 9:00 до 18:00 мск','.header-content__title');
        $I->seeElement('.page-header__button');

        // codecept_debug($heading);
    }
        public function SeeContent(AcceptanceTester $I)
    {
        // $I->amOnPage('/');
        // $I->seeElement('#search'); // #3 - search input
        // $I->fillField('#search', 'Atwix test');
        // $I->seeInField('#search', 'Atwix test');

        // $I->seeElement('#store.menu'); // #4 - Navigation menu
        // $I->cantSeeElement('a#ui-id-27'); // #5 - Element in navigation menu
        // $I->moveMouseOver('#ui-id-6');
        // $I->waitForElementVisible('a#ui-id-27');
        // $I->canSeeElement('a#ui-id-27');

        // $I->seeElement('div.block-promo-wrapper');

        // $I->seeElement('div.block.widget.block-products-list.grid');

        // $I->fillField('#newsletter', 'leandry@atwix.com'); // #7 Newsletter
        // $I->click('form#newsletter-validate-detail button.action.subscribe.primary');
        // $I->waitForElementVisible('#maincontent div.messages div.message-success');
        // $I->see('Thank you for your subscription.', '#maincontent div.messages div.message-success');
    }
        public function SeeFooter(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->seeElement('.page-footer'); // #6 Footer
        $I->see('© 2018 Альфа-Форекс. Все права защищены.', 'div.linksbar__link');
    }
}
