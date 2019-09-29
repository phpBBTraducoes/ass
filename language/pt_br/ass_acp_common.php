<?php
/**
 *
 * phpBB Studio - Advanced Shop System. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid [2019][ver 1.1.0] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2019, phpBB Studio, https://www.phpbbstudio.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

/**
 * Some characters you may want to copy&paste: ’ » “ ” …
 */
$lang = array_merge($lang, [
	'ACP_ASS_CATEGORIES_EXPLAIN'	=> 'Aqui você pode gerenciar as categorias na loja. Você pode adicionar, editar, excluir e ordenar categorias. Ao clicar em uma categoria, os itens serão exibidos.',
	'ACP_ASS_FILES_EXPLAIN'			=> 'Aqui você pode gerenciar os arquivos usados ​​em toda a loja. A categoria "arquivos" contém todos os arquivos usados ​​para itens reais, enquanto a categoria "imagens" contém todas as imagens para a exibição de um item.',
	'ACP_ASS_FILES_FILES_EXPLAIN'	=> 'Aqui você pode fazer upload de arquivos que posteriormente podem ser usados ​​como o item real que está sendo comprado. Portanto, o acesso a esses caminhos de arquivo diretamente através de um navegador foi restrito.',
	'ACP_ASS_FILES_IMAGES_EXPLAIN'	=> 'Aqui você pode fazer upload de imagens que posteriormente podem ser usadas para exibir um item na loja. A maioria das imagens utilizadas na loja funciona melhor com uma proporção de 3:2 (largura:altura).',
	'ACP_ASS_INVENTORY_EXPLAIN'		=> 'Aqui você pode gerenciar os inventários dos usuários. Você pode adicionar ou excluir vários itens de uma só vez para vários usuários e/ou grupos ou pode gerenciar o inventário de um usuário individual.',
	'ACP_ASS_ITEMS_EXPLAIN'			=> 'Aqui você pode gerenciar os itens dentro de uma categoria de loja. Você pode adicionar, editar, excluir e ordenar itens.',
	'ACP_ASS_LOGS_EXPLAIN'			=> 'Aqui você pode gerenciar e visualizar uma lista de todas as ações do Advanced Shop System executadas pelos usuários. Existem várias opções de exibição e classificação para sua conveniência.',
	'ACP_ASS_OVERVIEW_EXPLAIN'		=> 'Algumas dessas estatísticas são baseadas nas categorias, itens e logs atualmente disponíveis, sem levar em consideração nenhuma linha excluída.',
	'ACP_ASS_SETTINGS_EXPLAIN'		=> 'Aqui você pode ajustar as configurações básicas da loja do seu site, ativar a loja, fornecer ícones adequados e, entre outras, ajustar as configurações padrão do carrossel e do painel.',

	'ACP_ASS_AMOUNT_ITEMS'			=> 'Quantidade de itens',
	'ACP_ASS_AMOUNT_USERS'			=> 'Quantidade de usuários',
	'ACP_ASS_AVAILABLE'				=> 'Disponível',

	'ACP_ASS_APPLY'					=> 'Aplicar',
	'ACP_ASS_CLEAR'					=> 'Apagar',
	'ACP_ASS_COPY'					=> 'Copiar',

	'ACP_ASS_CAROUSEL_ARROWS'			=> 'Exibir setas',
	'ACP_ASS_CAROUSEL_ARROWS_DESC'		=> 'Se as setas "anterior" e "próximo" devem ou não ser exibidas.',
	'ACP_ASS_CAROUSEL_DOTS'				=> 'Exibir pontos',
	'ACP_ASS_CAROUSEL_DOTS_DESC'		=> 'Se os "pontos de navegação" devem ou não ser exibidos.',
	'ACP_ASS_CAROUSEL_FADE'				=> 'Usar animação "fade"',
	'ACP_ASS_CAROUSEL_FADE_DESC'		=> 'Se a animação "fade" deve ou não ser usada em vez da animação "slide".',
	'ACP_ASS_CAROUSEL_PLAY'				=> 'Ativar reprodução automática',
	'ACP_ASS_CAROUSEL_PLAY_DESC'		=> 'Se o carrossel deve ou não começar a reproduzir automaticamente.',
	'ACP_ASS_CAROUSEL_PLAY_SPEED'		=> 'Velocidade de reprodução automática',
	'ACP_ASS_CAROUSEL_PLAY_SPEED_DESC'	=> 'A quantidade de milissegundos que um slide deve ser exibida antes de deslizar automaticamente para o próximo.',
	'ACP_ASS_CAROUSEL_SPEED'			=> 'Velocidade da animação',
	'ACP_ASS_CAROUSEL_SPEED_DESC'		=> 'A quantidade de milissegundos pela duração da animação "fade" ou "slide".',

	'ACP_ASS_CATEGORY_ADD_SUCCESS'		=> 'Você adicionou a categoria com sucesso.',
	'ACP_ASS_CATEGORY_EDIT_SUCCESS'		=> 'Você editou a categoria com sucesso.',
	'ACP_ASS_CATEGORY_DELETE'			=> 'Excluir categoria',
	'ACP_ASS_CATEGORY_DELETE_CONFIRM'	=> 'Tem certeza de que deseja excluir esta categoria?
											<br><br>Isso excluirá todos os itens dessa categoria também.
											<br>Esses itens também serão excluídos dos inventários dos usuários.
											<br>No entanto, quaisquer ações executadas por esses itens não serão revertidas.
											<br><br>Esta ação <strong><u>não</u></strong> pode ser desfeita!', 
	'ACP_ASS_CATEGORY_DELETE_SUCCESS'	=> 'Você excluiu a categoria com sucesso.',

	'ACP_ASS_CONFLICT'					=> 'Conflito',
	'ACP_ASS_CONFLICT_DESC'				=> 'O usuário com quem isso aconteceu foi registrado no <a href="%1$s">Log do administrador</a>
											<br>Muito provavelmente <strong>“%2$s”</strong> deste item são inválidos.', 
	'ACP_ASS_CONFLICTS'					=> 'Conflitos',
	'ACP_ASS_CONFLICTS_DEACTIVATE'		=> 'Desativar itens com conflitos',

	'ACP_ASS_INVENTORY_ADD_SUCCESS'		=> [
		1 => 'Você adicionou esse item ao inventário com sucesso.',
		2 => 'Você adicionou esses itens ao inventário com sucesso.',
	],
	'ACP_ASS_INVENTORY_DELETE_SUCCESS'	=> [
		1 => 'Você excluiu esse item com sucesso no inventário deles.',
		2 => 'Você excluiu esses itens com sucesso no inventário deles.',
	],

	'ACP_ASS_ITEM_ADD_SUCCESS'			=> 'Você adicionou o item com sucesso.',
	'ACP_ASS_ITEM_EDIT_SUCCESS'			=> 'Você editou o item com sucesso.',
	'ACP_ASS_ITEM_DELETE'				=> 'Excluir item',
	'ACP_ASS_ITEM_DELETE_CONFIRM'		=> 'Tem certeza de que deseja excluir este item?
											<br><br>Isso também excluirá esse item do inventário dos usuários.
											<br>No entanto, quaisquer ações executadas por esse item não serão revertidas.
											<br><br>Esta ação <strong><u>não</u></strong> pode ser desfeita!',
	'ACP_ASS_ITEM_DELETE_SUCCESS'		=> 'Você excluiu o item com sucesso.',
	'ACP_ASS_ITEM_MARK_FEATURED'		=> 'Marque este item como "destaque"',
	'ACP_ASS_ITEM_MARK_SALE'			=> 'Marque este item como "em promoção"',
	'ACP_ASS_ITEM_UNMARK_FEATURED'		=> 'Desmarque este item como "destaque"',
	'ACP_ASS_ITEM_UNMARK_SALE'			=> 'Desmarque este item como "em promoção"',

	'ACP_ASS_CATEGORY_ACTIVE'			=> 'Ativar categoria',
	'ACP_ASS_CATEGORY_DESC'				=> 'Descrição da categoria',
	'ACP_ASS_CATEGORY_ICON'				=> 'Ícone da categoria',
	'ACP_ASS_CATEGORY_SLUG'				=> 'Slug categoria',
	'ACP_ASS_CATEGORY_TITLE'			=> 'Título da categoria',

	'ACP_ASS_GIFT_ICON'					=> 'Ícone do presente',
	'ACP_ASS_GIFT_ITEMS'				=> 'Itens de presente',
	'ACP_ASS_GIFT_PERCENTAGE'			=> 'Porcentagens',
	'ACP_ASS_GIFT_PRICE'				=> 'Preço',
	'ACP_ASS_GIFTING_ENABLED'			=> 'Presente ativado',

	'ACP_ASS_INVENTORY_ICON'			=> 'Ícone do inventário',

	'ACP_ASS_ITEM_ACTIVE'				=> 'Ativar item',
	'ACP_ASS_ITEM_AVAILABLE'			=> 'Item disponível',
	'ACP_ASS_ITEM_AVAILABLE_DESC'		=> 'O período em que este item estará disponível na loja.',
	'ACP_ASS_ITEM_BACKGROUND'			=> 'Imagem de plano de fundo do item',
	'ACP_ASS_ITEM_BACKGROUND_DESC'		=> 'A imagem usada em toda a loja para exibir o item.',
	'ACP_ASS_ITEM_COUNT'				=> 'Quantidade de uso do item',
	'ACP_ASS_ITEM_COUNT_DESC'			=> 'A quantidade de vezes que esse item pode ser usado após a compra.',
	'ACP_ASS_ITEM_COUNT_ZERO_DESC'		=> 'Defina como 0 para usos ilimitados.',
	'ACP_ASS_ITEM_DESC'					=> 'Descrição do item',
	'ACP_ASS_ITEM_EXPIRE_STRING'		=> 'Tempo de expiração do item',
	'ACP_ASS_ITEM_EXPIRE_DESC'			=> 'A quantidade de tempo após a qual esse item expirará e não poderá mais ser usada.',
	'ACP_ASS_ITEM_DELETE_STRING'		=> 'Tempo de exclusão do item',
	'ACP_ASS_ITEM_DELETE_DESC'			=> 'A quantidade de tempo após a qual o item será removido automaticamente do inventário do usuário,<br>quando o item expirou ou a quantidade de uso foi atingida.', 
	'ACP_ASS_ITEM_FEATURED'				=> 'Item em destaque',
	'ACP_ASS_ITEM_FEATURED_DESC'		=> 'O período em que esse item estará em destaque.',
	'ACP_ASS_ITEM_GIFT'					=> 'Item de presente',
	'ACP_ASS_ITEM_GIFT_DESC'			=> 'Se esse item pode ou não ser presenteado a outros usuários.',
	'ACP_ASS_ITEM_GIFT_ONLY'			=> 'Item somente para presentear',
	'ACP_ASS_ITEM_GIFT_ONLY_DESC'		=> 'Se esse item pode ou não ser somente presenteado a outros usuários e não comprado por eles mesmos.',
	'ACP_ASS_ITEM_GIFT_PERCENTAGE'		=> 'Porcentagem do item de presente',
	'ACP_ASS_ITEM_GIFT_PERCENTAGE_DESC'	=> 'A porcentagem que será adicionada sobre o preço normal do item quando esse item estiver sendo presenteado.',
	'ACP_ASS_ITEM_GIFT_PRICE'			=> 'Preço do item de presente', 
	'ACP_ASS_ITEM_GIFT_PRICE_DESC'		=> 'O preço que será usado em vez do preço normal do item quando este item estiver sendo presenteado.',
	'ACP_ASS_ITEM_GIFT_TYPE'			=> 'Item gift type',
	'ACP_ASS_ITEM_GIFT_TYPE_DESC'		=> 'Se deve usar a “porcentagem” ou o “preço” quando este item estiver sendo presenteado.',
	'ACP_ASS_ITEM_ICON'					=> 'Ícone do item',
	'ACP_ASS_ITEM_IMAGES'				=> 'Imagens de itens',
	'ACP_ASS_ITEM_PRICE'				=> 'Preço do item',
	'ACP_ASS_ITEM_REFUND_DESC'			=> 'A quantidade de tempo antes do qual um item não utilizado pode ser reembolsado.',
	'ACP_ASS_ITEM_REFUND_STRING'		=> 'Tempo de reembolso do item',
	'ACP_ASS_ITEM_RELATED_ENABLED'		=> 'Ativar itens relacionados',
	'ACP_ASS_ITEM_RELATED_ITEMS'		=> 'Itens relacionados',
	'ACP_ASS_ITEM_RESOLVE'				=> 'Resolver',
	'ACP_ASS_ITEM_RESOLVE_CONFIRM'		=> 'Tem certeza de que deseja marcar este conflito de item como resolvido?',
	'ACP_ASS_ITEM_RESOLVE_SUCCESS'		=> 'Você marcou com sucesso este conflito de itens como resolvido.',
	'ACP_ASS_ITEM_SALE'					=> 'Item em promoção',
	'ACP_ASS_ITEM_SALE_DESC'			=> 'O período em que este item estará em promoção.',
	'ACP_ASS_ITEM_SALE_PRICE'			=> 'Preço do item em promoção',
	'ACP_ASS_ITEM_SALE_PRICE_DESC'		=> 'O preço que será usado quando este item estiver em promoção.',
	'ACP_ASS_ITEM_SLUG'					=> 'Item slug',
	'ACP_ASS_ITEM_STOCK'				=> 'Estoque do item',
	'ACP_ASS_ITEM_STOCK_DESC'			=> 'O estoque do item atual.',
	'ACP_ASS_ITEM_STOCK_THRESHOLD'		=> 'Limite de estoque do item',
	'ACP_ASS_ITEM_STOCK_THRESHOLD_DESC'	=> 'Quando o estoque atinge esse limite, uma notificação é enviada aos usuários autorizados.',
	'ACP_ASS_ITEM_STOCK_UNLIMITED'		=> 'Estoque ilimitado de itens',
	'ACP_ASS_ITEM_STOCK_UNLIMITED_DESC'	=> 'Se o estoque deste item é ou não ilimitado.',
	'ACP_ASS_ITEM_STR_TO_TIME'			=> 'Examples of valid formatted time strings are',
	'ACP_ASS_ITEM_STR_TO_TIME_DESC'		=> 'Qualquer sequência de horas formatada válida para <a href="https://www.php.net/manual/en/function.strtotime.php"><code>strtotime()</code></a>.',
	'ACP_ASS_ITEM_TIMEZONE_BOARD'		=> 'O horário atual do site',
	'ACP_ASS_ITEM_TIMEZONE_YOUR'		=> 'Sua hora atual',
	'ACP_ASS_ITEM_TIMEZONE_DESC'		=> 'Por motivos de consistência, todas as datas estão no fuso horário do site.',
	'ACP_ASS_ITEM_TITLE'				=> 'Título do item',
	'ACP_ASS_ITEM_TYPE'					=> 'Tipo de item',
	'ACP_ASS_ITEM_TYPE_SELECT'			=> 'Selecione um tipo de item',
	'ACP_ASS_ITEM_TYPE_NO_AUTH'			=> 'Você não está autorizado a gerenciar este tipo de item.',
	'ACP_ASS_ITEMS_PER_PAGE'			=> 'Itens por página',

	'ACP_ASS_LOG_DELETED_ALL'			=> 'Você excluiu todas as entradas de log com sucesso.', 
	'ACP_ASS_LOG_DELETED_ENTRY'			=> 'Você excluiu a entrada de log com sucesso.',
	'ACP_ASS_LOG_DELETED_ENTRIES'		=> 'Você excluiu as entradas de log com sucesso.',
	'ACP_ASS_LOGS_PER_PAGE'				=> 'Logs por página',

	'ACP_ASS_NO_IMAGE_ICON'				=> 'Ícone "Sem imagem"',
	'ACP_ASS_NO_ITEMS_SELECTED'			=> 'Você não selecionou nenhum item.',
	'ACP_ASS_NOTES'						=> 'Notas',
	'ACP_ASS_NOTES_NO'					=> 'Não há notas',

	'ACP_ASS_NUMBER_CATEGORIES'			=> 'Número de categorias',
	'ACP_ASS_NUMBER_CONFLICTS'			=> 'Número de conflitos de itens',
	'ACP_ASS_NUMBER_FEATURED'			=> 'Número de itens em destaque',
	'ACP_ASS_NUMBER_ITEMS'				=> 'Número de ítens',
	'ACP_ASS_NUMBER_PURCHASES'			=> 'Número de compras',
	'ACP_ASS_NUMBER_SALE'				=> 'Número de itens em promoçào',
	'ACP_ASS_NUMBER_SPENT'				=> 'Total de %s gastos', 

	'ACP_ASS_OVERVIEW_BIGGEST_BUYERS'		=> 'Maiores compradores',
	'ACP_ASS_OVERVIEW_BIGGEST_BUYERS_NO'	=> 'Não há maiores compradores',
	'ACP_ASS_OVERVIEW_BIGGEST_GIFTERS'		=> 'Maiores presenteadores',
	'ACP_ASS_OVERVIEW_BIGGEST_GIFTERS_NO'	=> 'Não há maiores presenteadores',
	'ACP_ASS_OVERVIEW_BIGGEST_SPENDERS'		=> 'Maiores gastadores',
	'ACP_ASS_OVERVIEW_BIGGEST_SPENDERS_NO'	=> 'Não há maiores gastadores',
	'ACP_ASS_OVERVIEW_FEATURED_NO'			=> 'Não há itens em destaque',
	'ACP_ASS_OVERVIEW_FEATURED_UPCOMING'	=> 'Próximos destaques',
	'ACP_ASS_OVERVIEW_FEATURED_UPCOMING_NO'	=> 'Não há itens para destaques futuros',
	'ACP_ASS_OVERVIEW_LOW_STOCK'			=> 'Estoque baixo',
	'ACP_ASS_OVERVIEW_LOW_STOCK_NO'			=> 'Não há itens de estoque baixo',
	'ACP_ASS_OVERVIEW_RECENT_ITEMS'			=> 'Itens recentes',
	'ACP_ASS_OVERVIEW_RECENT_ITEMS_NO'		=> 'Nenhum item recente',
	'ACP_ASS_OVERVIEW_RECENT_PURCHASES'		=> 'Compras recentes',
	'ACP_ASS_OVERVIEW_RECENT_PURCHASES_NO'	=> 'Nenhuma compra recente',
	'ACP_ASS_OVERVIEW_SALE_NO'				=> 'Não há itens em promoção',
	'ACP_ASS_OVERVIEW_SALE_UPCOMING'		=> 'Próximas promoções',
	'ACP_ASS_OVERVIEW_SALE_UPCOMING_NO'		=> 'Não há itens para promoções futuras',
	'ACP_ASS_OVERVIEW_SELLERS_LOW'			=> 'Menos vendidos',
	'ACP_ASS_OVERVIEW_SELLERS_LOW_NO'		=> 'Nenhum item menos vendido',
	'ACP_ASS_OVERVIEW_SELLERS_TOP'			=> 'Mais vendidos',
	'ACP_ASS_OVERVIEW_SELLERS_TOP_NO'		=> 'Nenhum item mais vendido',

	'ACP_ASS_PANEL_FEATURED'			=> 'Destaques',
	'ACP_ASS_PANEL_SALE'				=> 'Promoções',
	'ACP_ASS_PANEL_FEATURED_SALE'		=> 'Promoções em destaque',
	'ACP_ASS_PANEL_RANDOM'				=> 'Aleatório',
	'ACP_ASS_PANEL_LIMITED'				=> 'Limitado',
	'ACP_ASS_PANEL_RECENT'				=> 'Recente',

	'ACP_ASS_PANEL_BANNER_COLOUR'		=> 'Cor do banner',
	'ACP_ASS_PANEL_BANNER_SIZE'			=> 'Tamanho do banner',
	'ACP_ASS_PANEL_BANNER_SIZE_NORMAL'	=> 'Normal',
	'ACP_ASS_PANEL_BANNER_SIZE_SMALL'	=> 'Pequeno',
	'ACP_ASS_PANEL_BANNER_SIZE_TINY'	=> 'Muito pequeno',
	'ACP_ASS_PANEL_ICON'				=> 'Ícone',
	'ACP_ASS_PANEL_ICON_COLOUR'			=> 'Cor do ícone',
	'ACP_ASS_PANEL_LIMIT'				=> 'Limite',

	'ACP_ASS_SETTINGS_CAROUSEL'			=> 'Configurações do carrossel',
	'ACP_ASS_SETTINGS_DEFAULT'			=> 'Configurações padrão',
	'ACP_ASS_SETTINGS_DISPLAY'			=> 'Configurações de exibição',
	'ACP_ASS_SETTINGS_GIFT'				=> 'Configurações de presente',
	'ACP_ASS_SETTINGS_INVENTORY'		=> 'Configurações do inventário',
	'ACP_ASS_SETTINGS_SHOP'				=> 'Configurações da loja',
	'ACP_ASS_SETTINGS_SPECIAL'			=> 'Configurações especiais',
	'ACP_ASS_SETTINGS_TYPE'				=> 'Configurações de tipo',

	'ACP_ASS_SHOP_ENABLED'				=> 'Loja ativada',
	'ACP_ASS_SHOP_ENABLED_DESC'			=> 'Isso tornará a loja completamente indisponível. Como se não existisse.',
	'ACP_ASS_SHOP_ACTIVE'				=> 'Loja ativa',
	'ACP_ASS_SHOP_ACTIVE_DESC'			=> 'Isso tornará a loja indisponível para usuários que não possuem as permissões necessárias.',
	'ACP_ASS_SHOP_INACTIVE_DESC'		=> 'Mensagem de loja inativa',
	'ACP_ASS_SHOP_INACTIVE_DESC_DESC'	=> 'Esta mensagem será exibida para usuários que não têm as permissões necessárias quando a loja está inativa.',
	'ACP_ASS_SHOP_ICON'					=> 'Ícone da loja',

	'ACP_ASS_USER_INVENTORY'			=> 'Inventário do usuário',
]);
