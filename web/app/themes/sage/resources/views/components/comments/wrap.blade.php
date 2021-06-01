@php
    comment_form([
    'fields' => [
        'author' => '<p class="comment-form-author">
			<input id="author" name="author" placeholder="' . __( 'Name' ) .  '" type="text" size="30" required />
		</p>',
        ],
        'comment_notes_before' => '',
        'comment_notes_after'  => '',
        'comment_field'        => '<p class="comment-form-comment">
		   <textarea id="comment" name="comment" cols="45" rows="8" placeholder="'. _x( 'Comment', 'noun' ) .'"  aria-required="true" required="required"></textarea></p>',
		'label_submit'         => pll__( 'Отправить' ),
        ])
@endphp
