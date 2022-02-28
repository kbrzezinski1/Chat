<div class="container-sm">
    <div class="row justify-content-center">
        <form action="includes/send.php" method="POST">


            <div class="mb-3">
                <label for="message" class="form-label">Wiadomość</label>
                <textarea id="message" class="form-control" name="message" rows="4" cols="50"></textarea>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="check">
                <label class="form-check-label" for="check">Nie jestem gorgonem</label>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input type="submit" class="btn btn-primary" value="Wyślij">
            </div>
        </form>
    </div>
</div>