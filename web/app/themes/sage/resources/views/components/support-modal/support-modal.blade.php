<div class="support-modal">
<div class="support-modal__close">@include("icon::cross")</div>
    <div class="support-modal__main">
        <div class="support-modal__title">Служба поддержки</div>
        <div class="support-modal__text">Выберите удобный для себя способ связи</div>
        <div class="support-modal__info-list">
            <div class="support-item">
                <div class="support-item__icon"><i class="fas fa-phone"></i></div>
                <div class="support-item__text-container">
                    <div class="support-item__title">8 800 444 11 56</div>
                    <div class="support-item__text">Для звонков по россии</div>
                </div>
            </div>
            <div class="support-item">
                <div class="support-item__icon"><i class="fas fa-phone"></i></div>
                <div class="support-item__text-container">
                    <div class="support-item__title">+7 960 036-71-76</div>
                    <div class="support-item__text">Международные звонки</div>
                </div>
            </div>
            <div class="support-item">
                <div class="support-item__icon"><i class="fas fa-clock"></i></div>
                <div class="support-item__text-container">
                    <div class="support-item__title">С 8:00 до 20:00</div>
                    <div class="support-item__text">Ежедневно</div>
                </div>
            </div>
        </div>
        <div class="support-modal__action-container">
            <div class="action-item">
                <div class="action-item__call-back tab-call" data-popup="make-call">
                    <div class="action-item__title">Заказать звонок</div>
                    <div class="action-item__subtitle">Мы вам перезвоним</div>
                </div>
                <div class="action-item__message tab-call" data-popup="make-msg">
                    <div class="action-item__title tab-message">Написать сообщение</div>
                    <div class="action-item__subtitle">Письменный вопрос</div>
                </div>
            </div>
        </div>
    </div>

    <div class="support-modal__call make-call">
        <div class="support-modal__title">
            <div class="support-modal__back-btn" data-popup="make-call">@include('icon::single-product.angle')</div>
            Заказать звонок
        </div>
        <div class="support-modal__text">Оставьте свои контакты, и мы свяжемся с Вами в удобное для Вас время</div>
        <div class="support-modal__body">@include('components.support-modal.back-call')</div>
    </div>

    <div class="support-modal__message make-msg">
        <div class="support-modal__title">
            <div class="support-modal__back-btn" data-popup="make-msg">@include('icon::single-product.angle')</div>
            Написать сообщение
        </div>
        <div class="support-modal__text">Ответ на свой вопрос Вы получите на электронную почту</div>
        <div class="support-modal__body">@include('components.support-modal.message')</div>
    </div>
</div>