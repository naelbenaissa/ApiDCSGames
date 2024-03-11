<?php

namespace App\Http\Controllers;
use App\Models\Application;
use App\Models\LigneFacturation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllController extends Controller {
    public function meilleurAppli()
    {
        $topApplications = LigneFacturation::selectRaw('grandclients.NomGrandClient AS GrandClient, application.nomAppli AS Application, SUM(ligne_facturation.prix) AS MontantTotalEuro')
            ->join('application', 'ligne_facturation.IRT', '=', 'application.IRT')
            ->join('clients', 'ligne_facturation.CentreActiviteID', '=', 'clients.CentreActiviteID')
            ->join('grandclients', 'clients.GrandClientID', '=', 'grandclients.GrandClientID')
            ->groupBy('grandclients.NomGrandClient', 'application.nomAppli')
            ->orderByDesc('MontantTotalEuro') // Tri descendant pour obtenir les plus utilisées en premier
            ->orderBy('grandclients.NomGrandClient') // Tri ascendant pour le nom du grand client
            ->limit(10)
            ->get();

        return response()->json($topApplications);
    }

    public function evolutionMontant()
    {
        $evolutionMontants = LigneFacturation::selectRaw('grandclients.NomGrandClient AS GrandClient, MONTH(ligne_facturation.mois) AS Mois, YEAR(ligne_facturation.mois) AS Annee, SUM(ligne_facturation.prix) AS MontantTotalEuro')
            ->join('application', 'ligne_facturation.IRT', '=', 'application.IRT')
            ->join('clients', 'ligne_facturation.CentreActiviteID', '=', 'clients.CentreActiviteID')
            ->join('grandclients', 'clients.GrandClientID', '=', 'grandclients.GrandClientID')
            ->whereBetween('ligne_facturation.mois', ['2021-01-01', '2022-04-30'])
            ->groupBy('grandclients.NomGrandClient', 'Mois', 'Annee')
            ->orderBy('MontantTotalEuro', 'desc')
            ->limit(5)
            ->get();

        return response()->json($evolutionMontants);
    }

    public function evolutionVolumesProduits($id)
    {
        $evolutionVolumes = LigneFacturation::selectRaw('produit.NOM_PRODUIT AS NomProduit, MONTH(ligne_facturation.mois) AS Mois, YEAR(ligne_facturation.mois) AS Annee, SUM(ligne_facturation.volume) AS VolumeTotal')
            ->join('produit', 'ligne_facturation.produitID', '=', 'produit.produitID')
            ->where('produit.NOM_PRODUIT', $id)
            ->whereBetween('ligne_facturation.mois', ['2021-01-01', '2022-04-30'])
            ->groupBy('produit.NOM_PRODUIT', 'Mois', 'Annee')
            ->orderBy('Annee')
            ->orderBy('Mois')
            ->get();

        return response()->json($evolutionVolumes);
    }
}
