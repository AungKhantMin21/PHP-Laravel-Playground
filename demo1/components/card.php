<div class="card border border-0 rounded-3 shadow-lg bg-light">
    <img src="<?= $product["image"] ?>" class="card-img-top px-4 py-3" alt="course logo">
    <div class="card-body">
        <h4 class="card-title fw-bold"><?= $product["title"] ?></h4>
        <table class="table table-borderless table-light mb-2">
            <tr>
                <td class="ps-0">Chapters-<?= $product["chapters"] ?></td>
                <td class="ps-0">Lessons-<?= $product["lessons"] ?></td>
                <td class="ps-0"><?= $product["level"] ?></td>
            </tr>
        </table>
        <h5 class="text-primary fw-semibold">0% Completed</h5>
        <hr class="border-5 border-dark rounded-pill my-3">
        <p class="card-text">Fee : <?= $product["fee"] ?> MMK</p>
        <p class="card-text text-success" style="font-size: 12px;"><?= $product["students"] ?> students certified.</p>
        <p class="card-text my-4">
            <?php showCategories($product["categories"]);?>
        </p>
        <div class="d-grid gap2">
            <a href="#" class="btn btn-primary rounded-3">Learn Later</a>
        </div>
    </div>
</div>