<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Registro</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background-color: #2c2c2c;
            padding: 40px 20px;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
        }

        .form-card {
            background-color: white;
            border-radius: 8px;
            padding: 32px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
            padding-bottom: 16px;
            border-bottom: 1px solid #e0e0e0;
        }

        .page-title {
            color: #00bcd4;
            font-size: 24px;
            font-weight: 500;
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 28px;
            color: #999;
            cursor: pointer;
            padding: 0;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: color 0.2s;
            line-height: 1;
        }

        .close-btn:hover {
            color: #333;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            display: block;
            color: #00bcd4;
            font-size: 14px;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .required {
            color: #00bcd4;
        }

        .form-input {
            width: 100%;
            padding: 14px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            font-size: 15px;
            background-color: #f5f5f5;
            transition: border-color 0.2s, background-color 0.2s;
        }

        .form-input:focus {
            outline: none;
            border-color: #00bcd4;
            background-color: white;
        }

        .form-input::placeholder {
            color: #999;
        }

        .form-actions {
            display: flex;
            gap: 12px;
            margin-top: 32px;
            padding-top: 24px;
            border-top: 1px solid #e0e0e0;
        }

        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.2s;
            flex: 1;
        }

        .btn-primary {
            background-color: #00bcd4;
            color: white;
        }

        .btn-primary:hover {
            background-color: #00acc1;
        }

        .btn-secondary {
            background-color: #e0e0e0;
            color: #666;
        }

        .btn-secondary:hover {
            background-color: #d0d0d0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-card">
            <div class="page-header">
                <h1 class="page-title">Novo Registro</h1>
                <button class="close-btn" onclick="window.history.back()">&times;</button>
            </div>

            <form>
                <div class="form-group">
                    <label class="form-label">Cartão do SUS: <span class="required">*</span></label>
                    <input type="text" id="sus" class="form-input" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label">Peso (KG) <span class="required">*</span></label>
                    <input type="number" step="0.1" class="form-input" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Altura (M) <span class="required">*</span></label>
                    <input type="number" step="0.01" class="form-input" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Data da última menstruação</label>
                    <input type="date" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label">Data de nascimento</label>
                    <input type="date" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label">Data da última gestação</label>
                    <input type="date" class="form-input">
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn-secondary" onclick="window.history.back()">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/cadastroScript.js') }}"></script>
</body>

</html>