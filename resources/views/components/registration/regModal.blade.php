<div class="modal fade" id="registrationModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Регистрация</h5>
            </div>
            <div class="modal-body">
                <form class="form" id="registrationForm">
                    <div class="mb-3">
                        <label for="nameReg" class="form-label">ФИО:</label>
                        <input type="text" name="nameReg" id="nameReg" required placeholder="ФИО">
                    </div>
                    <div class="mb-3">
                        <label for="loginReg" class="form-label">Логин:</label>
                        <input type="text" name="loginReg" id="loginReg" required placeholder="Логин">
                    </div>
                    <div class="mb-3">
                        <label for="passwordReg" class="form-label">Пароль:</label>
                        <input type="password" name="passwordReg" id="passwordReg" required placeholder="Пароль">
                    </div>
                    <button type="button" id="regBtn" class="button">Зарегистрироватся</button>
                </form>
            </div>
            <div class="alert alert-success">
                <h6>Вы успешно зарегистрировались(нет)</h6>
            </div>
        </div>
    </div>
</div>
