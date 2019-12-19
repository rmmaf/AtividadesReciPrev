library('rvest')
library('httr')
library('xml2')
source('getter.R')
url <- 'http://bvmf.bmfbovespa.com.br/cias-listadas/empresas-listadas/BuscaEmpresaListada.aspx?idioma=pt-br'
request <- POST(url, body = list('__EVENTTARGET' = "ctl00:contentPlaceHolderConteudo:BuscaNomeEmpresa1:btnTodas"), encode = "multipart")
links <- content(request, as = 'text', encoding = 'utf-8') %>% 
  read_html() %>% 
  html_nodes("tbody tr td a") %>%
  xml_attr("href")
links <- unique(links)
tabela <- content(request, as = 'text', encoding = 'utf-8') %>% 
  read_html() %>% 
  html_nodes('table') %>%
  html_table()
nome <- tabela[[1]][["Razão Social"]]
bruto1 <- vector(mode = "character", length = 422)
bruto2 <- vector(mode = "character", length = 422)

for (i in 1:422) {
  valuesAux <- getValues(paste0("http://bvmf.bmfbovespa.com.br/cias-listadas/empresas-listadas/", links[i]))
  bruto1[i] <- valuesAux[1]
  bruto2[i] <- valuesAux[2]
}
finalTable <- data.frame("Razão Social" = nome, "Resultado Bruto 1" = bruto1, "Resultado Bruto 2" = bruto2)
write.csv(finalTable, file = "TabelaB3.csv", row.names = FALSE)