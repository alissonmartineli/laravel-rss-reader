# Laravel RSS Reader

Realiza a leitura do RSS https://g1.globo.com/rss/g1/economia/ e disponibiliza as última notícias via API.

Utiliza cache Redis para melhorar o desempenho e disponibilidade. O cache esta configurado com duração de 60s.

O projeto esta configurado com Laravel Sail. Para iniciar basta executar:

```
./vendor/bin/sail up
```
