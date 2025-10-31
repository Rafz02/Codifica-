select
hospedes.nome_completo, 
hospedagens.titulo, 
reservas.deletado_em
from reservas, hospedes, hospedagens
where reservas.id_hospede = hospedes.id_hospede
and reservas.id_hospedagem = hospedagens.id_hospedagem
and reservas.deletado_em is not full;