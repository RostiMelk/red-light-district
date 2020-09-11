##  A lamp that lights up red og green depending on stock portfolio.
- Uses the Shareville API, not sure if that is legal or not so use it at your own risk.
- Uses IFTTT's webhook to control the light(s). 💡

### Setup following webhooks:
- `stock_light_green`
- `stock_light_red`

### Required parameters to work: 
- `portfolio` (Should include your portfolio ID, can be found in networks tab when checking your shareville page)
- `ifttt` (Should include your webhook api key)

### Setup
Put the code on a server and setup a cron job that triggers the URL.