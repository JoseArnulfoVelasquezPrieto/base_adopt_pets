<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Solicitud de Adopción</title>
    <!-- Bootstrap CDN (colores y centrado) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card-adopt { max-width: 600px; margin: 40px auto; border-radius: 12px; }
        .btn-adopt { background-color: #ff7f50; color: #fff; }
        .btn-adopt:hover { background-color: #ff6347; }
    </style>
</head>
<body>
    <div class="card card-adopt shadow">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">🐾 Solicitud de Adopción</h3>

            <!-- Botón para descargar (aún sin funcionalidad) -->
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                <button class="btn btn-sm btn-outline-primary" disabled title="Próximamente">
                    📄 Descargar formulario (PDF)
                </button>
            </div>

            <form action="{{ route('adopcion.enviar') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_mascota" value="{{ $mascota->id_mascota }}">

                <div class="mb-3">
                    <label class="form-label">¿Por qué deseas adoptar esta mascota?</label>
                    <textarea name="motivo" class="form-control" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">¿Tienes experiencia con mascotas?</label>
                    <select name="experiencia" class="form-select" required>
                        <option value="">Selecciona</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Sube el formulario firmado (PDF)</label>
                    <input type="file" name="pdf_formulario" class="form-control" accept=".pdf" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-adopt">Enviar Solicitud</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>