<script type="text/javascript" src="../class/My97DatePicker/WdatePicker.js"></script>
<form action="{$action}" method="post" id="myForm" role="form">
  <!-- b4-form-group-text -->
  <div class="form-group">
    <label for="title">待辦事項</label>
    <input type="text" name="title" id="title" class="form-control" placeholder="待辦事項" value="{$content.title}">
  </div>
  <!-- b4-form-texarea -->
  <div class="form-group">
    <label for="directions">描述</label>
    <!-- <textarea id="directions" class="form-control" name="directions" rows="3">{$content.directions}</textarea> -->
    <textarea id="editor" class="form-control" name="directions" >{$content.directions}</textarea>
  </div>
  <div class="form-group">
    <label for="title">到期日</label>
    <input type="text" name="end" id="end" class="form-control" value="{$content.end}" onClick="WdatePicker({literal}{dateFmt:'yyyy-MM-dd',startDate:'%y-%M-%d',minDate:'%y-%M-%d'}{/literal})" placeholder="到期日">
  </div>
  <!-- b4-form-select -->
  <div class="form-group">
    <label for="priority">優先順序</label>
    <select class="form-control" name="priority" id="priority">
      <option value="高" {if $content.priority=='高'}selected{/if}>高</option>
      <option value="中" {if $content.priority=='中'}selected{/if}>中</option>
      <option value="低" {if $content.priority=='低'}selected{/if}>低</option>
    </select>
  </div>

<div class="form-group">
    <label for="assign">指派對象</label>
    <!-- b4-form-check-inline-->
    <div class="form-check form-check-inline">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="assign[]" id="assign_0" value="爸爸" {if "爸爸"|in_array:$content.assign_arr}checked="checked"{/if}>爸爸
      </label>
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="assign[]" id="assign_1" value="媽媽" {if "媽媽"|in_array:$content.assign_arr}checked="checked"{/if}>媽媽
      </label>
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="assign[]" id="assign_2" value="哥哥" {if "哥哥"|in_array:$content.assign_arr}checked="checked"{/if}>哥哥
      </label>
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="assign[]" id="assign_3" value="妹妹" {if "妹妹"|in_array:$content.assign_arr}checked="checked"{/if}>妹妹
      </label>
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="assign[]" id="assign_4" value="我" {if "我"|in_array:$content.assign_arr}checked="checked"{/if}>我
      </label>
    </div>
</div>

  <div class="form-group">
      <label for="done">是否完成</label>
      <!-- b4-form-radio-inline-->
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="done" id="done" value="1"  {if $content.done=='1'}checked{/if}>完成
        </label>
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="done" id="done" value="0"  {if $content.done==''|| $content.done=='0'}checked{/if}>未完成
        </label>
  </div>
</div>
<div class="text-center">
  <input type="hidden" name="next_op" value="{$next_op}">
  <input type="hidden" name="sn" value="{$content.sn}">
  <input type="hidden" name="op" value="{$op}">
  <input type="submit" name="send" value="儲存" class="btn btn-primary" />
</div>
</form>

<style>
  .ck-editor__editable {
      min-height: 8rem;
  }
</style>
<script src="../class/ckeditor5/build/ckeditor.js"></script>
<script>ClassicEditor
  .create( document.querySelector( '#editor' ), {

    toolbar: {
      items: [
        'heading',
        '|',
        'bold',
        'italic',
        'link',
        'bulletedList',
        'numberedList',
        '|',
        'indent',
        'outdent',
        '|',
        'blockQuote',
        'insertTable',
        'undo',
        'redo',
        'fontBackgroundColor',
        'fontColor',
        'fontSize',
        'fontFamily',
        'highlight',
        'horizontalLine'
      ]
    },
    language: 'zh',
    table: {
      contentToolbar: [
        'tableColumn',
        'tableRow',
        'mergeTableCells'
      ]
    },
    licenseKey: '',

  } )
  .then( editor => {
    window.editor = editor;
  } )
  .catch( error => {
    console.error( 'Oops, something gone wrong!' );
    console.error( 'Please, report the following error in the https://github.com/ckeditor/ckeditor5 with the build id and the error stack trace:' );
    console.warn( 'Build id: dygf44s5ml6x-yvi4tsrqc2ex' );
    console.error( error );
  } )
  ;
</script>
