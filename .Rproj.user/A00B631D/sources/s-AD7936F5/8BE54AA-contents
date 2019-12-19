library('rvest')
library('httr')
library('xml2')
getValues <- function(url){
  source <- read_html(url) %>%
  html_nodes('iframe')
  link <- html_attr(source, 'src')[2]
  link <- sub("../..","http://bvmf.bmfbovespa.com.br",link)
  
  site <- read_html(link)
  tabela <- html_table(html_nodes(site, 'table')[4])
  return(c(tabela[[1]][2, 2], tabela[[1]][2, 3]))
}
