@extends('Admin.Admin Layot.master')
@section('admin.content')

        <div class="table-wrapper">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Retsept Nomi</th>
                        <th>Masalliqlar</th>
                        <th>Tayyorlanishi</th>
                        <th>Kim tomonidan yaratilgan</th>
                        <th>Harakatlar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Osh</td>
                        <td>100g guruch, 200g go'sht, sabzavotlar</td>
                        <td>1 soat davomida qovurish va suzish</td>
                        <td>Admin</td>
                        <td>
                            <button class="button green" onclick="window.location.href='editRecipes.html?id=1'">Tahrirlash</button>
                            <button class="button red" onclick="deleteRecipe(1)">O'chirish</button>
                        </td>
                    </tr>
                    <!-- Boshqa retseptlar shu yerda bo'ladi -->
                </tbody>
            </table>
        </div>

@endsection