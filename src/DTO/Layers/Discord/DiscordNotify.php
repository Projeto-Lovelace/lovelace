<?php

namespace App\DTO\Layers\Discord;

use App\DTO\Layers\LayerInterface;
use App\DTO\Main;
use GuzzleHttp\Client;

class DiscordNotify implements LayerInterface
{
    /**
     * @var array
     */
    private $data;

    /**
     * DiscordNotify constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function exec(Main $main)
    {
        $client = new Client();
        $url = $_SERVER['DISCORD_REWARD_URL'];

        $totalScore = $main->getResults()[1]['score'];
        $gainedScore = $this->data['score'];
        $description = $this->data['description'] !== '' ? "\nPontuação por: **{$this->data['description']}**": '';

        $body = array(
            'username' => 'Ada Lovelace',
            'avatar_url' => 'http://projetolovelace.com/img/profile-ada.jpg',
            'embeds' =>
                array(
                    0 =>
                        array(
                            'title' => "Parabéns, **{$main->getUser()->getName()}**",
                            'color' => 4974849,
                            'description' => "você acabou de ganhar **{$gainedScore} pontos**. <a:trophygif:820814157271662643> \nagora você tem **{$totalScore} pontos**.
                            {$description}\n▬▬▬▬▬▬▬▬▬▬\n**[Clique aqui para ver o ranking](http://projetolovelace.com/score/ranking)**",
                            'timestamp' => NULL,
                            'thumbnail' =>
                                array(
                                    'url' => 'https://lh3.googleusercontent.com/fife/ABSRlIomRQL4Wx3N9WvRJAWs2JPAlFR9A3yvc9va4SSvZun3Rpza5PwDsIFD-jEgGTGr35OWI0ilrMlhlVsC1QtJ80ThEnogM5rYhScUlt2zhb77vAe7aU5HBc9Gg35rmDI79_5JsGmQWJei6wX-MT-HqLNN1GqDUqH-lqO-T8LhludWescSrJVts_9H4ilpcjFGrH5_rMPikBMB7owrhPxzlSPB9g8BZpzA8azrWc0rFRJvEFmTnvdeP89ARk_SjRZJ7piwp6FPha3FP-l-hzDID9lGXSs4Hte_UaPuxFsngQUmVtD8CChKvpjrbeTpzJM4rXy746NBJXA8cRaJsniYw4hPsdLBU07_D5FH0A2h2Bw_evIZTWsplEzWtIpCBC6t0GGwbzM3Ux08rzvhHWWqll_C7sKP2xN-1wPGEAh4khJhANfEAliX02nNFlYriAPROjnWEtON6ACqLb-jYIb7tgyxVJWarJRrM8yt_CI1hVuxkt2KkXupTUOC5z9GczuFp4z6B14hpPIKk-0uONOlQAfXR7ncwsywNWTsgpACBHGjd6zJqNGNmbR4dqyjwc4uSHubDpHCGRfXlSGDg-YlVoMiFMUmSlnp2YWIcnsvKbPoJCRXRbNuHdeHcadrTZWAFgibHHel4AAAuTRLL1PX0SrdWqkTZeMFRvMkP5VI46xiAfmVeIqyklYZEB9VSnoTSazsY5iuzWao12q--w8V8PvJr7ak6Jtb0g=w2005-h877-ft',
                                ),
                        ),
                ),
        );

        $client->post($url, ['json' => $body]);
    }
}