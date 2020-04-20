<div class="labelwrap file">
    <label class="button input__file" for="file-upload_{{ $id or '1' }}">Выбрать файл</label><br>
    <input multiple="multiple" id="file-upload_{{ $id or '1' }}" type="file" class="file-upload input_file" name="{{ $name or '' }}"
           accept=".jpg,.jpeg,.png,.gif,.pdf,.doc,.docx,.ppt,.pptx,.odt,.avi,.ogg,.m4a,.mov,.mp3,.mp4,.mpg,.wav,.wmv">
    <span class="text input__file_result"></span>
</div>