<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Авторизация</h5>
            </div>
            <div class="modal-body">
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="emailLog" class="form-label">Эл. почта::</label>
                        <input type="email" name="emailLog" id="emailLog" required placeholder="Эл. почта:">
                    </div>
                    <div class="mb-3">
                        <label for="passwordLog" class="form-label">Пароль:</label>
                        <input type="text" name="passwordLog" id="passwordLog" required placeholder="Пароль">
                    </div>
                    <button type="submit" id="logBtn" class="button">Авторизация</button>
                </form>
            </div>
        </div>
    </div>
</div>
