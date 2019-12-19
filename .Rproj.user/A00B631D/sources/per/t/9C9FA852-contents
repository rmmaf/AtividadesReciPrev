tabela <- read.csv(file = "TabelaB3.csv", header = TRUE, stringsAsFactors = FALSE)
tabela <- na.omit(tabela)

tabela[[2]] <- sub("[(]", "-", tabela[[2]])
tabela[[2]] <- sub("[)]", "", tabela[[2]])
tabela[[2]] <- gsub("[.]", "", tabela[[2]])
tabela[[2]] <- as.numeric(tabela[[2]])

tabela[[3]] <- sub("[(]", "-", tabela[[3]])
tabela[[3]] <- sub("[)]", "", tabela[[3]])
tabela[[3]] <- gsub("[.]", "", tabela[[3]])
tabela[[3]] <- as.numeric(tabela[[3]])

diferenca <- (tabela[[3]] - tabela[[2]])

tabela$diferenca <- diferenca

tabela <- tabela[order(tabela$diferenca, decreasing = TRUE),]

periodos <- c(1, 2)



plot(x = periodos, y = floor(c(tabela[[3, 2]]/10000000, tabela[[3, 3]]/10000000)), type = "l", 
     xlab = "Periodos", 
     ylab = "Resultado Bruto (R$ bi)", 
     main = "Três Melhores Empresas",
     sub = "Para investir (considerando a diferença do Resultado Bruto de um ano para outro)",
     col = "red", ylim = c(1, 200), xaxt="none")

lines(x = periodos, y = floor(c(tabela[[2, 2]]/10000000, tabela[[2, 3]]/10000000)))
lines(x = periodos, y = floor(c(tabela[[1, 2]]/10000000, tabela[[1, 3]]/10000000)), col = "blue")
legend(x = 1,y = 100, yjust = 0.5,legend=c("	VALE","ITAU","Banco do Brasil"),
       col=c("red","black","blue"),
       pch=c("-","-","-"),lty=c(1,2,3), ncol=1, title = "Empresa", cex = 0.6)
