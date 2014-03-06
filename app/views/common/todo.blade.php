<h2>Voorstel</h2>
<ul>
    <li>Per pagina (shoplist, bon invoeren, overzicht, statistieken) een aparte ng module en laravel controller.</li>
    <li>Voor algemene delen wordt de ngCommon module gebruikt en een common laravel controller.</li>
    <li>Ng templates worden door laravel opgebouwd en aan ng geserveerd.</li>
</ul>

<h3>Eventueel / ideeen / tech</h3>
<ul>
    <li>Mobiele interface verbeteren zodat items afgevinkt kunnen worden (en live updates zodat refresh niet nodig
        is).
    </li>
    <li>Opmerkingen bij een shoplist item dat los staat van de naam van het product.</li>
    <li>Iedereen een echte pieko account gekoppeld aan een email. Automatisch emails versturen aan eind van de maand.
    </li>
    <li>Bitcoin betalingen.</li>
</ul>

<h3>Belangrijk</h3>
<ul>
    <li>Omdat er een conflict is tussen ng en blade templates gebruiken we voor de ng templates de <code
            ng-non-bindable>[[ ]]</code> handles in plaats van <code>@{{ }}</code>.
    </li>
</ul>
