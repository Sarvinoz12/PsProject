@extends('Ps.PsLayot.master')
@section('ps.content')
        <div class="recipe-form-wrapper">
            <form action="add-recipe-action.php" method="POST" enctype="multipart/form-data">
                <!-- Retsept nomi -->
                <div class="form-group">
                    <label for="recipeName">Retsept Nomi</label>
                    <input type="text" id="recipeName" name="recipeName"  required>
                </div>

                <!-- Masalliqlar -->
                <div class="form-group">
                    <label for="ingredients">Masalliqlar</label>
                    <textarea id="ingredients" name="ingredients" rows="4"  required></textarea>
                </div>

                <!-- Tayyorlanish -->
                <div class="form-group">
                    <label for="instructions">Tayyorlanish</label>
                    <textarea id="instructions" name="instructions" rows="6"  required></textarea>
                </div>

                <!-- Rasm yuklash -->
                <div class="form-group">
                    <label for="recipeImage">Retsept Rasm</label>
                    <input type="file" id="recipeImage" name="recipeImage" accept="image/*" required>
                </div>

                <!-- Tugmalar -->
                <div class="form-group">
                    <button type="submit" class="button green">Yaratish</button>
                    <button type="reset" class="button yellow">Tozalash</button>
                </div>
            </form>
        </div>
@endsection