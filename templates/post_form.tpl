<div class="container">
  <div class="container">
    <form >
        <!-- b4-form-group-text -->
        <div class="form-group">
          <label for="title">待辦事項</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="待辦事項">
        </div>
        <!-- b4-form-texarea -->
        <div class="form-group">
          <label for="directions">描述</label>
          <textarea id="directions" class="form-control" name="directions" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="title">到期日</label>
          <input type="text" name="end" id="end" class="form-control" placeholder="到期日">
        </div>
        <!-- b4-form-select -->
        <div class="form-group">
          <label for="priority">優先順序</label>
          <select class="form-control" name="priority" id="priority">
            <option value="高">高</option>
            <option value="中">中</option>
            <option value="低">低</option>
          </select>
        </div>
        <!-- b4-form-check-inline-->
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="assign[]" id="assign_0" value="爸爸">爸爸
          </label>
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="assign[]" id="assign_1" value="媽媽">媽媽
          </label>
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="assign[]" id="assign_2" value="哥哥">哥哥
          </label>
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="assign[]" id="assign_3" value="妹妹">妹妹
          </label>
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="assign[]" id="assign_4" value="我">我
          </label>
        </div>

        <!-- b4-form-radio-inline-->
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="done" id="done" value="1">完成
          </label>
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="done" id="done" value="0">未完成
          </label>
        </div>
    </form>
  </div>
</div>