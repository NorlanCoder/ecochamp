<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture</title>
    <style>
        /* Styles CSS pour la mise en page de la facture */
        /* Vous pouvez personnaliser ces styles selon vos besoins */
    </style>
</head>
<body>
    <header>
        <h1>Facture</h1>
        <p>Date: {{$facture->created_at}}</p>
        <p>Numéro de facture: {{$facture->facture_number}}</p>
        <!-- Ajoutez d'autres informations d'en-tête ici selon vos besoins -->
    </header>
    <main>
        <!-- Tableau pour afficher les détails de la facture -->
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <!-- Lignes de la facture -->
                <!-- Remplacez ces lignes par vos propres données -->
                @foreach ($facture->factureItems as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->prix / $item->quantity}}</td>
                        <td>{{$item->prix}}</td>
                    </tr>
                @endforeach                
                <!-- Ajoutez autant de lignes que nécessaire -->
            </tbody>
        </table>
        <!-- Total de la facture -->
        <p>Total: {{$fature->prix_tt}}</p>
    </main>
    <footer>
        <p>Merci pour votre confiance chez Ecochamp!</p>
    </footer>
</body>
</html>