<div class="action-buttons">
    @foreach($buttons as $button)
        <x-botao 
            :text="$button['text']" 
            :url="$button['url']" 
            :class="$button['class']"
        />
    @endforeach
</div>
