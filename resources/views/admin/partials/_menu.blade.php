<ul class="collection">
    {{--<a class="collection-item" href="{{ route('admin.categories.index') }}"><i class="material-icons left">list</i> Категории</a>
    <a class="collection-item" href="{{ route('admin.products.index') }}"><i class="material-icons left">store</i>Продукты</a>
    <a class="collection-item" href="{{ route('admin.photos.index') }}"><i class="material-icons left">photo</i>Фотографии</a>
    <div class="divider"></div>
    <a class="collection-item" href="{{ route('admin.pages.index') }}"><i class="material-icons left">content_copy</i> Страницы</a>
    <a class="collection-item" href="{{ route('admin.articles.index') }}"><i class="material-icons left">library_books</i> Статьи</a>
    <a class="collection-item" href="{{ route('admin.news.index') }}"><i class="material-icons left">featured_play_list</i> Новости</a>
    <a class="collection-item" href="{{ route('admin.slides.index') }}"><i class="material-icons left">photo_size_select_actual</i> Слайдер</a>
    <a class="collection-item" href="{{ route('admin.galleries.index') }}"><i class="material-icons left">photo_library</i> Фотогалереи</a>
    <div class="divider"></div>
    <a class="collection-item" href="{{ route('admin.users.index') }}"><i class="material-icons left">account_box</i>Пользователи</a>--}}
    <a class="collection-item" href="{{ route('admin.blocks.index') }}?page=index"><i class="material-icons left">content_copy</i> Главная</a>
    <a class="collection-item" href="{{ route('admin.blocks.index') }}?page=land-department"><i class="material-icons left">content_copy</i> Земельный департамент</a>
    <a class="collection-item" href="{{ route('admin.blocks.index') }}?page=building-department"><i class="material-icons left">content_copy</i> Департамент строительства</a>
    <a class="collection-item" href="{{ route('admin.blocks.index') }}?page=investing-department"><i class="material-icons left">content_copy</i> Инвестирование</a>
    <div class="divider"></div>
    <a class="collection-item" href="{{ route('admin.partners.index') }}"><i class="material-icons left">assistant</i> Партнеры</a>
    <a class="collection-item" href="{{ route('admin.recalls.index') }}"><i class="material-icons left">feedback</i> Отзывы</a>
</ul>

<ul class="collection">
    <a class="collection-item" href="{{ route('admin.settings') }}"><i class="material-icons left">settings</i>Настройки</a>
    <a class="collection-item" href="{{ route('admin.administrators.index') }}"><i class="material-icons left">verified_user</i>Администраторы</a>
</ul>