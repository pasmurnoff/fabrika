@php $postLink = get_the_permalink(); @endphp
<div class="share mrgn15-bottom">
    <div class="share_text text text_black">Поделиться:</div>
    <ul class="share__items mrgn15-top">
        <li class="share__item"><a class="share__link"
                                   href="http://www.facebook.com/sharer.php?url=<?php echo $postLink; ?>"
                                   target="_blank"
                                   title="Поделиться на Фейсбук"><i class="fab share__icon fa-facebook-f"></i></a>
        </li>
        <li class="share__item">
            <a class="share__link" href="https://twitter.com/share?url=<?php echo $postLink; ?>"
               target="_blank" title="Поделиться в Твиттер"><i
                        class="fab share__icon fa-twitter"></i></a>
        </li>
        <li class="share__item">
            <a class="share__link"
               href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $postLink; ?>"
               target="_blank" title="Поделиться в ЛинкедИн"><i
                        class="fab share__icon fa-linkedin"></i></a>
        </li>
        <li class="share__item">
            <a class="share__link" href="mailto:<?php echo $postLink; ?>"
               target="_blank" title="Поделиться на почту"><i class="fa share__icon  fa-envelope"></i></a>
        </li>
    </ul>
</div>