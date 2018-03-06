{extends file='parent:_partials/header.tpl'}

{block name='header_banner'}
    <div class="msg-promo">
        Les Jours Fous c'est parti, soyez les premiers à profiter des plus belles remises et d'un max de codes promo, rien que pour vous !!!
    </div>
    <div class="header-banner">
        {hook h='displayBanner'}
    </div>
{/block}