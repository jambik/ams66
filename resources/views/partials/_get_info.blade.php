<div class="modal fade" id="getInfoModal" tabindex="-1" role="dialog" aria-labelledby="getInfoLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('get_info.send') }}" method="POST" name="form_get_info" id="form_get_info">
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="getInfoLabel">Отзыв</h4>
                </div>
                <div class="modal-body">
                    <div class="form-status"></div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" name="name" placeholder="Ваше имя">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" name="contact" placeholder="Телефон или Email">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control input-lg" placeholder="Сообщение" style="height: 250px;"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-default" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-lg btn-primary form-button">Запрос на информацию</button>
                </div>
            </form>
        </div>
    </div>
</div>