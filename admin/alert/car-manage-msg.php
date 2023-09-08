<?php
if (isset($_SESSION['add-feature-success'])) {
    echo '<p class="text-center text-muted msg-alert"><font color="green">' . $_SESSION['add-feature-success'] . '</font></p>';
    unset($_SESSION['add-feature-success']);
}

if (isset($_SESSION['edit-car-success'])) {
    echo '<p class="text-center text-muted msg-alert"><font color="green">' . $_SESSION['edit-car-success'] . '</font></p>';
    unset($_SESSION['edit-car-success']);
}

if (isset($_SESSION['edit-car'])) {
    echo '<p class="alert alert-danger">' . $_SESSION['edit-car'] . '</p>';
    unset($_SESSION['edit-car']);
}

if (isset($_SESSION['delete-car-success'])) {
    echo '<p class="text-center text-muted msg-alert"><font color="green">' . $_SESSION['delete-car-success'] . '</font></p>';
    unset($_SESSION['delete-car-success']);
}

if (isset($_SESSION['delete-car-error'])) {
    echo '<p class="alert alert-danger">' . $_SESSION['delete-car-error'] . '</p>';
    unset($_SESSION['delete-car-error']);
}

if (isset($_SESSION['add-car-success'])) {
    echo '<p class="text-center text-muted msg-alert"><font color="green">' . $_SESSION['add-car-success'] . '</font></p>';
    unset($_SESSION['add-car-success']);
}

if (isset($_SESSION['add-car-error'])) {
    echo '<p class="alert alert-danger">' . $_SESSION['add-car-error'] . '</p>';
    unset($_SESSION['add-car-error']);
}

if (isset($_SESSION['add-car-images-success'])) {
    echo '<p class="text-center text-muted msg-alert"><font color="green">' . $_SESSION['add-car-images-success'] . '</font></p>';
    unset($_SESSION['add-car-images-success']);
}

if (isset($_SESSION['add-car-images-error'])) {
    echo '<p class="alert alert-danger">' . $_SESSION['add-car-images-error'] . '</p>';
    unset($_SESSION['add-car-images-error']);
}
